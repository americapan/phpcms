<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer class="LayoutBottom">
    <div class="FooterTop pagewidth">
    </div>
    <div class="fullwrap">
        <div class="inner pagewidth">
            <div class="FooterLeft">
                <div class="Control Control_322">
                    <h3>About Onestop</h3>
                    <p style="text-align: left;">ONESTOP-Hebi City Thermal 
                        Meter Instrument Factory is a leading supplier of laboratory equipment 
                        for both public and private industry and universities. We can provide 
                        the everyday testing items as well as the more technical equipment like 
                        biochemical lab equip and industrial hygiene devices. Our customers 
                        include construction, manufacturing, energy and government institutions 
                        home and abroad. Established in 1980’s. Our focus has been and always 
                        will be on Customer Service and Attention-to-Detail. We encourage you to
                        browse our family of websites or contact us for assistance. Thank you.</p>
                </div>
            </div>
            <div class="FooterRight">
                <div id="ctl45_dvControl" class="Control LinkGroup Control_324 Control_324 Control_324">
                    <div id="ctl45_dvControlHeader" class="ControlHeader ControlHeader_324">Useful Links</div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="ControlLink ControlLink_324">
                        <a class="ControlLink_Link ControlLink_Link_324" href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a>
                    </div>
                    <div class="ControlLinkSeperator ControlLinkSeperator_324"></div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <div style="clear:both;"></div>
                </div>
                <div class="Control Control_326">
                    <h3>Stay in Touch</h3>
                    <ul class="social">
                        <li><a href="#" title="Fan Us on Facebook"><img src="<?php echo IMG_PATH;?>yingtian/fb-glass-icon-small.png" alt="Fan Us on Facebook" title="Fan Us on Facebook" height="36" width="35"></a></li>
                        <li><a href="#" title="Follow Us on Twitter"><img src="<?php echo IMG_PATH;?>yingtian/twitter-glass-icon-small.png" alt="Follow Us on Twitter" title="Follow Us on Twitter" height="36" width="35"></a></li>
                        <li><a href="#" title="Visit Us at First Responder Network"><img src="<?php echo IMG_PATH;?>yingtian/frn-glass-icon2-small.png" alt="Visit Us at First Responder Network" title="Visit Us at First Responder Network" height="36" width="35"></a></li>
                        <li><a href="#" title="Visit Us at Calibration Gas"><img src="<?php echo IMG_PATH;?>yingtian/calgas-glass-icon-small.png" alt="Visit Us at Calibration Gas" title="Visit Us at Calibration Gas" height="36" width="35"></a></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Copyright © 2014 <a href="http://demo.cmsyou.com/blacken/" title="Onestop Laboratory Equipment" style="color:#fff;">Onestop Laboratory Equipment</a> demo.cmsyou.com/blacken  All Rights Reserved.</p>
                    <div class="columnSpace"><p>Supported by <a href="http://www.cmsyou.com/" style="color:#fff;" target="_blank">CMSYOU</a>.</p>
                        <script>
                            $(".social li a img").each(function () {
                                $(this).mouseover(function () {
                                    src = $(this).attr("src");
                                    $(this).attr("src", src.replace("_off", "_on"));
                                });
                                $(this).mouseout(function () {
                                    src = $(this).attr("src");
                                    $(this).attr("src", src.replace("_on", "_off"));
                                });
                            });</script>
                    </div>
                </div>
            </div>
        </div>
    </div></footer>
</div>
<script type="text/javascript">if (window.attachEvent)
        window.attachEvent('onload', SubMenuItemHoverFunction);</script>
<script type="text/javascript">$(function () {
        $(".Carousel_750").carousel({visible: 5, scrollCount: 5, themeLayoutControlId: 750});
    });</script>

</body></html>