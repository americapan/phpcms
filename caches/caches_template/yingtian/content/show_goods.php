<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/jquery_003.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/jquery_002.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/jquery_004.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>yingtian/jquery_003.css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>yingtian/jquery.css">
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>yingtian/jquery_002.css">
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>yingtian/jquery_004.css">
<script type="text/javascript">
    $(document).ready(function () {
        $("a[rel=pro_group]").fancybox({
            'transitionIn': 'none',
            'transitionOut': 'none',
            'titlePosition': 'over',
            'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over"> ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }
        });
    });
</script>
<link media="all" href="<?php echo CSS_PATH;?>yingtian/widget009.css" type="text/css" rel="stylesheet">
<link media="all" href="<?php echo CSS_PATH;?>yingtian/counter015.css" type="text/css" rel="stylesheet">
</head>
<section class="LayoutMiddle pagewidth">
    <section class="LayoutContent">
        <div itemscope="" itemtype="http://schema.org/Product" class="LayoutContentInner">
            <span id="lblCategoryTrail" class="ProductDetailsCategoryTrail">
                <a href="<?php echo siteurl($siteid);?>">Home</a> &gt; <?php echo catpos($catid);?>
            </span>
            <div class="ProductDetailsLeft">
                <div class="ProductDetailsPhotoArea">
                    <div class="ProductDetailsPhoto">
                        <!--Luara js文件-->
                        <script src="<?php echo JS_PATH;?>yingtian/jquery.luara.0.0.1.min.js"></script>
                        <link rel="stylesheet" href="<?php echo CSS_PATH;?>yingtian/luara.top.css"/>
                        <div class="example1">

                            <ul>
                                <?php $n=1;if(is_array($pics)) foreach($pics AS $r) { ?>
                                <li><img src="<?php echo $r['url'];?>" alt="<?php echo $r['alt'];?>"/></li>
                                <?php $n++;}unset($n); ?>
                            </ul>
                            <ol>
                                <?php $n=1;if(is_array($pics)) foreach($pics AS $r) { ?>
                                <li></li>
                                <?php $n++;}unset($n); ?>
                            </ol>
                        </div>
                        <script>
    $(function () {
        $(".example1").luara({width: "315", height: "250", interval: 5000, selected: "seleted", deriction: "top"});
    });
                        </script>
                    </div>
                </div>
            </div>

            <div class="ProductDetails">
                <div class="inner">
                    <h1 itemprop="name" class="ProductDetailsProductName"><?php echo $title;?></h1>
                    <div class="ProductDetailsItemNrAvailability">
                        <div id="dvProductItemNr" class="ProductDetailsItemNr">
                            <p><span id="lblItemNrLabel">NO.: <?php echo $NO;?></span></p>
                            <p><span id="lblItemNrLabel">Brand: <?php echo $Brand;?></span></p>
                            <p><span id="lblItemNrLabel">Standards: <?php echo $Standards;?></span></p>
                            <p><span id="lblItemNrLabel">Views: <span id="hits"></span></span></p>
                        </div>

                    </div>

                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" id="dvProductPricing" class="ProductDetailsPricing">
                        <span itemprop="price">
                            <span id="lblSalePriceArea" class="ProductDetailsSalePriceArea">
                                <span id="lblSalePriceLabel" class="ProductDetailsSalePriceLabel">Price: </span>
                                <span id="lblSalePrice" class="ProductDetailsSalePrice"><?php echo $Price;?></span>                                  
                            </span>                               
                        </span>
                        <br>
                        <br><br><br><br> 
                    </div>

                    <div style="clear:both"></div>
                    <div class="ProductDetailsTabs">
                        <span itemprop="description">

                            <script type="text/javascript">
                                $(function () {
                                    $("#tabs").tabs();
                                });
                            </script>


                            <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                                <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                                    <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Description</a></li>
                                    <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Specifications</a></li>
                                    <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Downloads</a></li>
                                </ul>
                                <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                                    <?php echo $description;?>
                                </div>
                                <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                                    <?php echo $content;?>
                                </div>
                                <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                                    <?php $n=1;if(is_array($download)) foreach($download AS $r) { ?>
                                    <p><img src="<?php echo IMG_PATH;?>yingtian/download.png" border="0" target="_blank"> <?php echo $r;?></p>
                                    <?php $n++;}unset($n); ?> 
                                </div>
                            </div>
                        </span></div>
                    <div style="clear:both"></div>

                    <div style="clear:both;height:20px;"></div>

                    <div id="ctl27_dvControl" class="Control Carousel Control_794 Carousel_794">
                        <h4 align="left">Related Products</h4>
                        <div style=" display:block; width:550px; height:5px; line-height:5px; margin-bottom:10px; border-bottom:1px #ccc solid; clear:both;"></div>
                        <br>
                        <table class="CarouselContainer" align="center" cellpadding="0" cellspacing="0">
                            <tbody>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af8252166d1c20774fe058b2187581bb&action=position&posid=18&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
                                <tr>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <td class="CarouselItem">
                                        <div id="ctl26_lvCarousel_ctrl0_ctl00_dvControlItem" class="ControlItem ControlItem_794">
                                            <table style="border:0; width: 100%;" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center; height: 100px; width: 135px;" valign="center">
                                                            <a href="<?php echo $r['url'];?>" id="ctl27_lvCarousel_ctrl0_lnkThumbnail" title="<?php echo $r['title'];?>">
                                                                <img id="ctl27_lvCarousel_ctrl0_iThumbnail" class="FeaturedItemsThumbnail" src="<?php echo thumb($r[thumb],110,0);?>" alt="<?php echo $r['title'];?>" style="border-width:0px;" height="100" width="135">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <div id="ctl27_lvCarousel_ctrl0_pnlProductName" class="ControlLink ControlLink_794">
                                                                <a id="ctl27_lvCarousel_ctrl0_lnkProductName" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                        </div>
                                    </td>
                                    <?php $n++;}unset($n); ?>
                                </tr>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="detail-title"><h3>Inquiry</h3></div>
                <div style=" display:block; width:550px; height:5px; line-height:5px; margin-bottom:10px; border-bottom:1px #ccc solid; clear:both;"></div>
                <div style="text-align:left;">
                    <p>Please feel free to contact us if you need any informaiton: <strong>Sales Hotline:</strong> +86-371-86506036  <strong>Email: </strong><a href="mailto:sales@coallab.com">sales@coallab.net</a></p>
                    <p style="color: #cc0000;font-weight: bold;">If you need any further information regarding to our product, please fill the form, and we will contact you as soon as possible.</p>            </div>
                <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=13&action=js&siteid=1'></script>
            </div>
            <div id="divSocialBookmarks" class="ProductDetailsSocialBookmarks">
                <!-- AddThis Button BEGIN -->
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54bc5f141f76fef5" async="async"></script>        
                <!-- AddThis Button END -->
            </div>
            <div style="clear:both"></div>
            <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
    </section>
</section>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>