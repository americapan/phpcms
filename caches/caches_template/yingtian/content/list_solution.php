<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_1"); ?>
<section class="LayoutMiddle pagewidth">
    <div style="clear:both;"></div>
    <aside class="LayoutLeftColumn">
        <div class="LayoutLeftColumnInner">
            <div id="ctl27_dvControl" class="Control CategoryNavigationLinks Control_359">
                <div id="ctl27_dvControlHeader" class="ControlHeader ControlHeader_359">Product Categories</div>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a446c773f8f99bdb8200eb515b74029d&action=category&catid=28&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'28','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="ControlItem ControlItem_359">
                    <div class="ControlLink ControlLink_359">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" class="ControlLink_Link ControlLink_Link_359"><?php echo $r['catname'];?></a>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div id="ctl27_dvControlFooter" class="ControlFooter ControlFooter_359"></div>	

                <div class="ControlHeader ControlHeader_359" style="margin-top:20px;">Recommended</div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fbe1756f739d346dd0a362a95f124144&action=category&catid=29&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'29','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="ControlItem ControlItem_359">
                    <div class="ControlLink ControlLink_359">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" class="ControlLink_Link ControlLink_Link_359"><?php echo $r['catname'];?></a>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div id="ctl27_dvControlFooter" class="ControlFooter ControlFooter_359"></div>	
            </div>

            <div id="ctl28_dvControlHeader" class="ControlHeader ControlHeader_528"></div>
        </div>
    </aside>
    <section class="LayoutContent">
        <div class="LayoutContentInner">
            <span id="lblCategoryTrail" class="CategoryCategoryTrail">
                 <a href="<?php echo siteurl($siteid);?>">Home</a> &gt;<?php echo catpos($catid);?>
            </span><br><br>
            <div><span id="lblCategoryHeader" class="CategoryCategoryHeader"></span></div>
            <div id="dvWrapControl2250" style="clear: both;;"><div id="ctl45_dvControl" class="Control ProductDisplay Control_2250">
                    <div id="ctl45_dvControlHeader" class="ControlHeader ControlHeader_2250"><?php echo $CATEGORYS[$catid]['catname'];?></div>
                    <div id="text_list">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <ul class="list lh24 f14">
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style=""><?php echo $r['title'];?></a><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span></li>
                            <?php if($n%5==0) { ?><li class="bk20 hr"></li><?php } ?>
                            <?php $n++;}unset($n); ?>
                        </ul>
                         <div class="pagenavi"><?php echo $pages;?></div>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
        <div style="clear:both"></div>
    </section>
</section>
<?php include template("content","footer"); ?>