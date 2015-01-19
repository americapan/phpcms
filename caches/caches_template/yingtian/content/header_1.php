<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="x-ua-compatible" content="IE=EmulateIE9"/>
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>yingtian/style.css"></link>
        <script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/jquery.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/ac_modal.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/ac_002.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>yingtian/ac.js"></script>
        <!--[if lt IE 9]>
        <script src="<?php echo JS_PATH;?>yingtian/html5.js"></script>
        <![endif]-->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    </head>
    
    <body class="LeftColumn">
        <div class="Layout">
            <header class="LayoutTop">
                <div class="inner pagewidth">
                    <div class="LayoutTopMiddle">
                        <div class="LayoutTopLeft">
                            <div class="Control Control_306">
                                <a href="<?php echo siteurl($siteid);?>" title="Onestop - Hebi City Thermal Meter Instrument Factory"><img src="<?php echo IMG_PATH;?>yingtian/logo.png" alt="Onestop - Hebi City Thermal Meter Instrument Factory" style="margin-top:12px; margin-left:15px;"/></a>
                                <a class="mobilecall" href="tel:+86-392-3311689"><img src="<?php echo IMG_PATH;?>yingtian/blank.png" style="margin-left:315px;margin-top:-65px;float:left;"/></a>
                            </div>
                        </div>
                        <div class="LayoutTopRight">
                            <div class="Control Control_309">
                                <div id="utilnav">
                                    <div id="utilnav">
                                        <div class="Control Control_311">
                                            <form action="http://demo.cmsyou.com/blacken/index.php" method="get" target="_blank">
                                                <input name="m" value="search" type="hidden"/>
                                                <input name="c" value="index" type="hidden"/>
                                                <input name="a" value="init" type="hidden"/>
                                                <input name="typeid" value="3" id="typeid" type="hidden"/>
                                                <input name="siteid" value="1" id="siteid" type="hidden"/>
                                                <input class="AutocompleteSearchBox" name="q" id="q" value="Search Products" onfocus="if (this.value == 'Search Products')this.value = ''" onblur="if (this.value == '')this.value = 'Search Products'" onkeydown="if ((event.which & amp; & amp; event.which == 13) || (event.keyCode & amp; & amp; event.keyCode == 13)){universalSearchUrl('txt_input'); return false; } else return true;" onkeypress="if ((event.which & amp; & amp; event.which == 13) || (event.keyCode & amp; & amp; event.keyCode == 13)){universalSearchUrl('txt_input'); return false; } else return true;" type="text"/>
                                                <input name="btnSearchBox" class="ThemeButton GoThemeButton SearchGoThemeButton" title="Search" value="Go" type="submit"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="LayoutTopBottom">
                        <div id="leftRibbon"></div>
                        <div id="rightRibbon"></div>
                        <div class="inner">
                            <!--一级导航栏结束-->
                            <div class="HorizontalNav Control Control_312">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a446c773f8f99bdb8200eb515b74029d&action=category&catid=28&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'28','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <div class="HorizontalNavItem ControlLink_312">
                                    <a class="HorizontalNavLink_312" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                                    <div class="HorizontalNavSeperator ControlLinkSeperator_312"></div>
                                    <?php if($r[arrchildid]) { ?> <!--是否有子栏目-->
                                    <div class="SubMenu">
                                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                                        <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?><!--子栏目循环开始-->
                                        <div class="SubMenuItem">
                                            <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                                        </div>
                                        <div class="SubMenuItemSeparator"></div>
                                        <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                    </div>
                                    <?php } ?>

                                </div>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                <div style="clear:both;"></div>
                            </div>
                            <!--一级导航栏结束-->
                            <!--网站介绍开始-->
                            <div id="ctl43_spHorizontalNav" class="HorizontalNav Control Control_313">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                                <div class="HorizontalNavItem ControlLink_313"><a href="<?php echo siteurl($siteid);?>">Home</a></div>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <div class="HorizontalNavItem ControlLink_313"><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></div>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                <div style="clear:both;"></div>
                            </div>
                            <!--网站介绍结束-->
                        </div>
                    </div>
                </div>
                <div class="pagewidth">
                </div>
            </header>     