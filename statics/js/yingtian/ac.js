// ac.jquery.carousel.js
(function($) {

    $.fn.carousel = function(options) {
        var defaults = {
            startIndex: 0,
            visible: 3,
            scrollCount: 3,
            themeLayoutControlId: 0,
            afterScroll: null
        };
        
        var settings = $.extend({}, defaults, options);

        cellFilter = function() {
            return $(this).hasClass("CarouselItem");
        };
        
        toggleCells = function(cells, startIndex, visible) {
            var activeCells = new Array();
            var itemIndex = 0;

            $(cells).each(function() {
                if (itemIndex < startIndex) {
                    $(this).addClass("Hidden");
                    activeCells[itemIndex] = false;
                } else if (itemIndex >= startIndex + visible) {
                    $(this).addClass("Hidden");
                    activeCells[itemIndex] = false;
                } else {
                    $(this).removeClass("Hidden");
                    activeCells[itemIndex] = true;
                }
                itemIndex++;
            });

            return activeCells;
        };

        checkCells = function(container, activeCells, lastIndex) {
            if (activeCells[0]) {
                $(container).find(".CarouselPrevButtonImage").addClass("Hidden");
                $(container).find(".CarouselPrevButtonDisabledImage").removeClass("Hidden");
            } else {
                $(container).find(".CarouselPrevButtonDisabledImage").addClass("Hidden");
                $(container).find(".CarouselPrevButtonImage").removeClass("Hidden");
            }

            if (activeCells[lastIndex]) {
                $(container).find(".CarouselNextButtonImage").addClass("Hidden");
                $(container).find(".CarouselNextButtonDisabledImage").removeClass("Hidden");
            } else {
                $(container).find(".CarouselNextButtonDisabledImage").addClass("Hidden");
                $(container).find(".CarouselNextButtonImage").removeClass("Hidden");
            }
        };

        btnNext_Click = function() {
            var container = $(this).parents("table.CarouselContainer");
            var cells = $(container).find("td").filter(cellFilter);
            var itemIndex = 0;

            for (var i = 0; i < cells.length; i++) {
                if (!$(cells[i]).hasClass("Hidden")) break;
                itemIndex++;
            }

            var newStartIndex = itemIndex + settings.scrollCount;
            var numberToDisplay = cells.length - newStartIndex;

            if (numberToDisplay < settings.visible) {
                var displayDiff = settings.visible - numberToDisplay;
                newStartIndex = newStartIndex - displayDiff;
            }

            var activeCells = toggleCells(cells, newStartIndex, settings.visible);
            var lastIndex = activeCells.length - 1;

            checkCells(container, activeCells, lastIndex);

            if (settings.afterScroll) {
                settings.afterScroll();
            }
        };

        btnPrev_Click = function() {
            var container = $(this).parents("table.CarouselContainer");
            var cells = $(container).find("td").filter(cellFilter);
            var itemIndex = 0;

            for (var i = 0; i < cells.length; i++) {
                if (!$(cells[i]).hasClass("Hidden")) break;
                itemIndex++;
            }

            var newStartIndex = itemIndex - settings.scrollCount;
            if (newStartIndex < 0) {
                newStartIndex = 0;
            }

            var activeCells = toggleCells(cells, newStartIndex, settings.visible);
            var lastIndex = activeCells.length - 1;

            checkCells(container, activeCells, lastIndex);

            if (settings.afterScroll) {
                settings.afterScroll();
            }
        };
        
        return this.each(function() {
            var btnNext;
            var btnPrev;

            if (settings.themeLayoutControlId > 0)
                btnNext = $(this).find(".CarouselNextButton_" + settings.themeLayoutControlId);
            if (btnNext.length == 0)
                btnNext = $(this).find(".CarouselNextButton");

            $(btnNext).unbind("click", btnNext_Click).bind("click", btnNext_Click);
            
            if (settings.themeLayoutControlId > 0)
                btnPrev = $(this).find(".CarouselPrevButton_" + settings.themeLayoutControlId);
            if (btnPrev.length == 0)
                btnPrev = $(this).find(".CarouselPrevButton");

            $(btnPrev).unbind("click", btnPrev_Click).bind("click", btnPrev_Click);

            var cells = $(this).find("td").filter(cellFilter);
            var activeCells = toggleCells(cells, settings.startIndex, settings.visible);

            checkCells(this, activeCells, activeCells.length - 1);
        });
    };
    
})(jQuery);