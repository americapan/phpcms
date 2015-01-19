(function(window, $) {

  var acPU;

  if (parent && parent.acPU) {
    acPU = parent.acPU; // if we're in an iframe, we want the parent instance
  } else {
    
    var Modal = function() {
      this._variableName = "acPU";
      this._currentIndex = 0;
      this._previousIndex = null;
      this._isShown = false;
      this._modals = new Array();
      this._moveModalInfo = null;
      this._isDragging = false;
      this._bodyOverflow = null;

      this._modalMaskCssClass = "ac-modal-mask";
      this._modalCssClass = "ac-modal";
      this._modalTitleCssClass = "ac-modal-title";
      this._modalCloseCssClass = "ac-modal-close";
      this._modalIframeCssClass = "ac-modal-iframe";
      this._modalContentCssClass = "ac-modal-content";
      this._modalLoaderCssClass = "ac-modal-loader";
      this._modalFooterCssClass = "ac-modal-footer";

      this._defaults = {
        width : 800,
        height : 600,
        zIndex : 200000,
        title : null,
        onClose : null
      };
    };
    
    Modal.prototype = {
      // Provided for backwards compatibility
      Open : function(url, width, height, onCloseFunction) {
        this.open(url, { width : width, height : height, onClose : onCloseFunction });
      },

      open : function(url, settings) {
        var pu = this,
            options = $.extend(pu._defaults, settings, { });

        pu.init(options);

        var m = pu._modals[pu._currentIndex],
            $titleSpan = m.modalTitle.children("span"),
            titleText = "Popup Window";

        // Set the popup title after loading the iframe
        m.modalIframe.unbind("load.acPU").bind("load.acPU", { m : m, options : options }, pu._frameLoaded);

        if (pu._currentIndex > 0) {
          var $otherModals = $("." + pu._modalCssClass).not(m.modal);
          $otherModals.css({
              opacity : "0.4",
              filter : "alpha(opacity=40)"
            });
          $otherModals.find("." + pu._modalTitleCssClass).unbind("mousedown.acPU");
        }

        if (pu._previousIndex == null || pu._previousIndex < 0) {
          pu._bodyOverflow = $("body").css("overflow");
        }

        $("body").css("overflow", "hidden");

        var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            scrollX = $(window).scrollLeft(),
            scrollY = $(window).scrollTop(),
    		// IE didn't support scrollX and scrollY so use JQuery
    		//scrollX = window.scrollX,
    		//scrollY = window.scrollY,
            modalDimensions = pu._calculateDimensions(m, options, windowWidth, windowHeight, scrollX, scrollY);

        m.modalLoader.css({
            left : modalDimensions.width / 2 - m.modalLoader.width() / 2,
            top : modalDimensions.height / 2 - m.modalLoader.height() / 2
          });
        m.modalIframe.attr("src", url);

        m.modal.css({
            width : modalDimensions.width,
            height : modalDimensions.height,
            top : modalDimensions.y,
            left : modalDimensions.x
          }).show();
        m.modalMask.css({
            top : scrollY,
            left : scrollX,
            width : windowWidth,
            height : windowHeight
          }).show();

        pu._previousIndex = pu._currentIndex;
        pu._currentIndex = pu._currentIndex + 1;

        pu._isShown = true;
      },

    	// Provided for backwards compatibility
      Close : function(returnValue) {
        this.close(returnValue);
      },

      close : function(returnValue) {
        var pu = this;
        if (pu._isShown) {
          var m = pu._modals[pu._previousIndex],
              $modal = m.modal,
              $modalMask = m.modalMask,
              onCloseCallback = m.onClose;

          pu._modals[pu._previousIndex] = null;

          pu._currentIndex = pu._previousIndex;
          pu._previousIndex = pu._previousIndex - 1;

          $modal.remove();

          if (pu._previousIndex < 0) {
            $modalMask.remove();

            $("body").css("overflow", pu._bodyOverflow);
            //$("body").css("overflow", "");
            $(window).unbind(".acPU");

            pu._bodyOverflow = null;
            pu._previousIndex = null;
            pu._isShown = false;
          } else {
            m = pu._modals[pu._previousIndex];
            m.modal.css({
                opacity : "1.0",
                filter : "alpha(opacity=100)"
              });
            m.modalTitle.bind("mousedown.acPU", { pu : pu, index : pu._previousIndex }, pu._dragStart);
          }

          if (onCloseCallback) {
            onCloseCallback(returnValue);
          }
        }
      },

      resize : function(event) {
        var pu = event.data.pu,
            index = event.data.index,
            options = event.data.options,
            m = pu._modals[index],
            windowHeight = $(window).height(),
            windowWidth = $(window).width(),
            scrollX = window.scrollX,
            scrollY = window.scrollY,
            dimensions = pu._calculateDimensions(m, options, windowWidth, windowHeight, scrollX, scrollY);

        m.modal.css({
            width : dimensions.width,
            height : dimensions.height,
            top : dimensions.y,
            left : dimensions.x
          });
      },

      scroll : function(event) {
        var pu = event.data.pu;
        pu.resize(event);
      },

      init : function(options) {
        var pu = this;

        var $modalMask = $("#dvModalMask");
        if ($modalMask.length == 0) {
          $modalMask = $("<div />").attr("id", "dvModalMask").addClass(pu._modalMaskCssClass);
          $modalMask.css({
              width : "auto",
              height : "auto",
              position : "absolute",
              display : "none",
              overflow : "hidden",
              zIndex : options.zIndex
            });
          $modalMask.appendTo("body");
        }

        var $modal = $("<div />").addClass(pu._modalCssClass);
        $modal.css({
            width : "auto",
            height : "auto",
            position : "absolute",
            display : "none",
            zIndex : options.zIndex
          });
        pu._disableSelection($modal);

        var commonEventArgs = {
          pu : pu,
          index : pu._currentIndex
        };

        var $title = $("<div />").addClass(pu._modalTitleCssClass).css("display", "none");
        $title.bind("mousedown.acPU", commonEventArgs, pu._dragStart);
        pu._disableSelection($title);
        $title.appendTo($modal);

        var $close = $("<div />").addClass(pu._modalCloseCssClass);
        $close.bind("click.acPU", commonEventArgs, function() {
          pu.close();
        });
        $close.appendTo($title);

        var $titleSpan = $("<span />");
        pu._disableSelection($titleSpan);
        $title.append($titleSpan);

        var $content = $("<div />").addClass(pu._modalContentCssClass);
        $content.css("display", "none");
        $content.appendTo($modal);

        var $loader = $("<div />").addClass(pu._modalLoaderCssClass);
        $loader.css("position", "absolute");
        $loader.appendTo($modal);

        var $iframe = $("<iframe />").addClass(pu._modalIframeCssClass);
        $iframe.css({
            width : "100%",
            border : "0 none"
          }).attr("frameborder", "no");
        $iframe.appendTo($content);

        var $footer = $("<div />").addClass(pu._modalFooterCssClass).css("display", "none");
        $footer.appendTo($modal);

        commonEventArgs.options = options;
        $modal.appendTo("body");

        $(window).bind("resize.acPU", commonEventArgs, pu.resize);
        $(window).bind("scroll.acPU", commonEventArgs, pu.scroll);

        pu._modals[pu._currentIndex] = {
          modal : $modal,
          modalTitle : $title,
          modalClose : $close,
          modalMask : $modalMask,
          modalIframe : $iframe,
          modalContent : $content,
          modalLoader : $loader,
          modalFooter : $footer,
          onClose : options.onClose
        };
      },

      _calculateDimensions : function(m, options, ww, wh, sx, sy) {
        var modalHeight = options.height,
            modalWidth = options.width,
            closeHeight = m.modalClose.height(),
            closeWidth = m.modalClose.width();

        if (modalWidth + closeWidth > ww) {
          modalWidth = ww - closeWidth;
        }
        if (modalHeight + closeHeight > wh) {
          modalHeight = wh - closeHeight;
        }

        if (!sx) {
          sx = 0;
        }
        if (!sy) {
          sy = 0;
        }

        var x = (ww / 2 - modalWidth / 2) + sx,
            y = (wh / 2 - modalHeight / 2) + sy,
            result = {
              width : modalWidth,
              height : modalHeight,
              x : x,
              y : y
            };

        return result;
      },

      _frameLoaded : function(event) {
        var m = event.data.m,
            options = event.data.options,
            $titleSpan = m.modalTitle.children("span"),
            titleText = "AmeriCommerce Popup";

        m.modalLoader.css("display", "none");
        m.modalContent.css("display", "block");

        try {
          var frameTitle = m.modalIframe.contents().find("title").html();
          if (frameTitle.length > 0) {
            titleText = frameTitle;
          }
        } catch(e) {
          // will fail if a different domain
        }

        if (options.title) {
          titleText = options.title;
        }
        $titleSpan.html(titleText);
        m.modalTitle.css("display", "block");
        m.modalFooter.css("display", "block");
      },

      _dragStart : function(event) {
        var pu = event.data.pu,
            index = event.data.index,
            m = pu._modals[index];

        pu._moveModalInfo = {
          startMouseX : event.pageX,
          startMouseY : event.pageY,
          startModalX : parseInt(m.modal.css("left").replace("px", "")),
          startModalY : parseInt(m.modal.css("top").replace("px", ""))
        };

        $(document).bind("mouseup.acPU", event.data, pu._dragEnd);
        $(document).bind("mousemove.acPU", event.data, pu._dragMove);

        m.modalIframe.css({ display : "none" });
        pu._isDragging = true;
      },

      _dragMove : function(event) {
        var pu = event.data.pu,
            index = event.data.index,
            m = pu._modals[index],
            eventX = event.pageX,
            eventY = event.pageY,
            changeX = eventX - pu._moveModalInfo.startMouseX,
            changeY = eventY - pu._moveModalInfo.startMouseY;

        m.modal.css({
            left : pu._moveModalInfo.startModalX + changeX,
            top : pu._moveModalInfo.startModalY + changeY
          });
      },

      _dragEnd : function(event) {
        var pu = event.data.pu,
            index = event.data.index,
            m = pu._modals[index];

        pu._isDragging = false;
        pu._moveModalInfo = null;
        $(document).unbind("mouseup.acPU").unbind("mousemove.acPU");
        m.modalIframe.css({ display : "block" });
      },

      _disableSelection : function(element) {
        element.attr("unselectable", "on").css("MozUserSelect", "none").bind("selectstart.acPU", function() { return false; });
      }
    };

    acPU = new Modal();
  }

  window.acPU = acPU;
  

  $.fn.acPU = function(options) {
    this.each(function() {
      var el = $(this);
      el.click(function(event) {
        var href = $(this).attr("href");
        event.preventDefault();
        acPU.open(href, options);
      });
    });
  };

})(this, jQuery);