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
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dd5340c99f776e840048cf3adf2168c&action=position&posid=10&catid=%24catid&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','catid'=>$catid,'order'=>'listorder DESC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="ControlItem ControlItem_359">
                    <div class="ControlLink ControlLink_359">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" class="ControlLink_Link ControlLink_Link_359"><?php echo $r['title'];?></a>
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
            <div id="dvWrapControl2250" style="clear: both;">
                <div id="ctl45_dvControl" class="Control ProductDisplay Control_2250">
                    <div id="ctl45_dvControlHeader" class="ControlHeader ControlHeader_2250">Best Sellers</div>
                    <table id="ctl45_dlItems" style="width:100%;border-collapse:collapse;" border="0" cellspacing="0">
                        <tbody>       
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=950589b82fa7c6c03a4f7d9c09259a16&action=position&posid=19&thumb=1&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','thumb'=>'1','order'=>'listorder DESC','limit'=>'3',));}?> 
                            <tr>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>                                                          
                                <td class="ControlItem" style="border-width:0px;height:0px;width:33.33333%;">
                        <ac:layoutarea id="Item">
                            <ac:visibilityarea id="dvControlItem">      
                                <div class="FeaturedItemsItem">
                                    <div class="FeaturedItemsThumbNail FeaturedItemsThumbNail_2250">
                                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" id="ctl45_dlItems_ctl00_lnkThumbnail">
                                            <img id="ctl45_dlItems_ctl00_iThumbnail" class="FeaturedItemsThumbNail FeaturedItemsThumbNail_2250" src="<?php echo thumb($r[thumb],110,0);?>" alt="<?php echo $r['title'];?>" style="border-width:0px;" height="122" width="178">
                                        </a>
                                    </div>
                                    <div class="FeaturedItemsPriceTab">
                                        <div class="FeaturedItemsName">
                                            <a id="ctl45_dlItems_ctl00_hlProductName" class="ControlLink ControlLink_2250" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],40,'');?>...</a>
                                        </div>
                                        <div class="FeaturedItemsPrice">
                                            <span id="ctl28_dlItems_ctl01_ltrPrice">
                                                <span id="lblSalePriceArea_181_6162" class="lblSalePriceArea">
                                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fd620997da59a6b5ba2dd2c1747b9365&sql=select+%2A+from+v9_goods_data+where+id%3D%24r%5Bid%5D&return=v\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_goods_data where id=$r[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$v = $a;unset($a);?>
                                                    <?php $n=1;if(is_array($v)) foreach($v AS $p) { ?>                
                                                    <span id="lblSalePrice_181_6162" class="lblSalePrice"><?php echo $p['Price'];?></span>    
                                                    <?php $n++;}unset($n); ?>
                                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                                </span>                                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </ac:visibilityarea>
                        </ac:layoutarea>
                        </td>

                        <?php $n++;}unset($n); ?>
                        </tr>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="clear:both"></div>
            <div id="dvNavTop">
                <div class="ControlHeader ControlHeader_2250">Product List</div>
            </div>    
            <table id="ctl45_dlItems" style="width:100%;border-collapse:collapse;" border="0" cellspacing="0">
                <tbody>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <tr>  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      
                        <td class="ControlItem" style="border-width:0px;height:0px;width:33.33333%;">
                <ac:layoutarea id="Item">
                    <ac:visibilityarea id="dvControlItem">      
                        <div class="FeaturedItemsItem">
                            <div class="FeaturedItemsThumbNail FeaturedItemsThumbNail_2250">
                                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" id="ctl45_dlItems_ctl00_lnkThumbnail">
                                    <img id="ctl45_dlItems_ctl00_iThumbnail" class="FeaturedItemsThumbNail FeaturedItemsThumbNail_2250" src="<?php echo thumb($r[thumb]);?>" alt="<?php echo $r['title'];?>" style="border-width:0px;" height="122" width="178">
                                </a>
                            </div>
                            <div class="FeaturedItemsPriceTab">
                                <div class="FeaturedItemsName">
                                    <a id="ctl45_dlItems_ctl00_hlProductName" class="ControlLink ControlLink_2250" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a>
                                </div>
                                <div class="FeaturedItemsPrice">
                                    <span id="ctl28_dlItems_ctl01_ltrPrice">
                                        <span id="lblSalePriceArea_181_6162" class="lblSalePriceArea">
                                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fd620997da59a6b5ba2dd2c1747b9365&sql=select+%2A+from+v9_goods_data+where+id%3D%24r%5Bid%5D&return=v\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_goods_data where id=$r[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$v = $a;unset($a);?>
                                            <?php $n=1;if(is_array($v)) foreach($v AS $p) { ?>                
                                            <span id="lblSalePrice_181_6162" class="lblSalePrice"><?php echo $p['Price'];?></span>    
                                            <?php $n++;}unset($n); ?>
                                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                                              
                                        </span>                                           
                                    </span>
                                </div>
                            </div>
                        </div>
                    </ac:visibilityarea>
                </ac:layoutarea>
                </td>
                <?php $n++;}unset($n); ?>
                </tr>
                <div id="pages" class="text-c"><?php echo $pages;?></div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </tbody>
            </table>
            <div style="clear:both"></div>
            <div class="pagenavi"></div>
        </div>
        <div style="clear:both"></div>
    </section>
</section>
<?php include template("content","footer"); ?>