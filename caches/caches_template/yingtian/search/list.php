<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('search', 'header'); ?>
<section class="LayoutMiddle pagewidth">
    <div style="clear:both;"></div>
    <aside class="LayoutLeftColumn">
        <div class="LayoutLeftColumnInner">
            <div id="ctl27_dvControl" class="Control CategoryNavigationLinks Control_359">
                <div id="ctl27_dvControlHeader" class="ControlHeader ControlHeader_359">Product Categories</div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2d8ddc1f208ddb7c883253da95c4f1e&action=category&catid=28&num=25&siteid=%24siteid&order=listorder+ASC&return=res\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$res = $content_tag->category(array('catid'=>'28','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($res)) foreach($res AS $r) { ?>
                <div class="ControlItem ControlItem_359">
                    <div class="ControlLink ControlLink_359">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" class="ControlLink_Link ControlLink_Link_359"><?php echo $r['catname'];?></a>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div id="ctl27_dvControlFooter" class="ControlFooter ControlFooter_359"></div>	

                <div class="ControlHeader ControlHeader_359" style="margin-top:20px;">Recommended</div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=10" title="Agricultrual Solution Title 5" class="ControlLink_Link ControlLink_Link_359">Agricultrual Solution Title 5</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=9" title="Environmental Solution Title 4" class="ControlLink_Link ControlLink_Link_359">Environmental Solution Title 4</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=8" title="NDT Solution Title 3" class="ControlLink_Link ControlLink_Link_359">NDT Solution Title 3</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=18&amp;id=7" title="Onestop Lab Product title 7" class="ControlLink_Link ControlLink_Link_359">Onestop Lab Product title 7</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=7&amp;id=6" title="Food Lab Solution Title 1" class="ControlLink_Link ControlLink_Link_359">Food Lab Solution Title 1</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=18&amp;id=6" title="Onestop Laboratory 6" class="ControlLink_Link ControlLink_Link_359">Onestop Laboratory 6</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=18&amp;id=5" title="Onestop Laboratory Equipment 5" class="ControlLink_Link ControlLink_Link_359">Onestop Laboratory Equipment 5</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=22&amp;id=4" title="Our manufacture are attending 2013 China" class="ControlLink_Link ControlLink_Link_359">Our manufacture are attending 2013 China</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=12&amp;id=4" title="Food Lab Product Title 4" class="ControlLink_Link ControlLink_Link_359">Food Lab Product Title 4</a></div></div>
                <div class="ControlItem ControlItem_359"><div class="ControlLink ControlLink_359"><a href="http://demo.cmsyou.com/blacken/index.php?m=content&amp;c=index&amp;a=show&amp;catid=22&amp;id=2" title="Swimming pool heat pump" class="ControlLink_Link ControlLink_Link_359">Swimming pool heat pump</a></div></div>
                <div id="ctl27_dvControlFooter" class="ControlFooter ControlFooter_359"></div>	
            </div>

            <div id="ctl28_dvControlHeader" class="ControlHeader ControlHeader_528"></div>
        </div>
    </aside>
    <section class="LayoutContent">
        <div class="LayoutContentInner">
            <span id="lblCategoryTrail" class="CategoryCategoryTrail">
                <a href="<?php echo siteurl($siteid);?>">Home</a> &gt; Search
            </span>
            <br><br>
            <div><span id="lblCategoryHeader" class="CategoryCategoryHeader"></span></div>
            <div id="dvWrapControl2250" style="clear: both;">
                <div id="ctl45_dvControl" class="Control ProductDisplay Control_2250">
                    <div class="prolist">
                        <div class="l">
                            <div class="jg">
                                <div class="sr_head">
                                    <div class="l" id="search">
                                        <?php $j=0?>
                                        <?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
                                        <?php $j++;?>
                                        <a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?> - <?php } ?>
                                        <?php $n++;}unset($n); ?>
                                        <?php unset($j);?>
                                    </div>
                                </div>
                            </div>
                            <div class="sr_frm_box">
                                <form name="search" type="get">
                                    <div class="sr_frmipt">
                                        <input name="m" value="search" type="hidden"/>
                                        <input name="c" value="index" type="hidden"/>
                                        <input name="a" value="init" type="hidden"/>
                                        <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
						  <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                                        <input name="q" class="ipt" id="q" value="<?php echo $search_q;?>" type="text"/>
                                        <div class="sp" id="aca">▼</div><input class="ss_btn" value="Search" type="submit"></div>
                                </form>
                                <div id="sr_infos" class="wrap sr_infoul">
                                </div>
                            </div>
                            <div class="jg">There is <?php echo $totalnums;?> results (Search took <?php echo sprintf("%01.2f", $execute_time);?> seconds).</div>
                        </div>
                        <div class="clear h10"></div>
                        <div id="list_wrap">
                            <div class="bd">
                                <ul class="list_p">
                                    
                                    <?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
                                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" height="110" width="152" border="0">              
                                            <h3><?php echo $r['title'];?><span><?php echo format::date($r[inputtime], 1);?></span></h3><span class="p3"></span></a>
                                        <p><?php echo $r['description'];?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" class="more">More...</a></p>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(empty($data)) { ?><li>Sorry, there is no results found, please try again...</li><?php } ?>
                                </ul>
                                <div class="pagenavi"><?php echo $pages;?></div>
                            </div>
                        </div>
                        <div class="clear h10"></div>
                    </div>

                </div>
                <div style="clear:both"></div>
            </div>
        </div>
        <div style="clear:both"></div>
    </section>
</section>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<?php include template("content","footer"); ?>