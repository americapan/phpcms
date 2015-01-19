<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
        <section class="LayoutMiddle pagewidth">
            <section class="LayoutContent">
                <div itemscope="" itemtype="http://schema.org/Product" class="LayoutContentInner">
                    <h2><?php echo $title;?></h2>
                    <?php echo $content;?>
                </div>
                <div style="clear:both"></div>
            </section>
        </section>
<?php include template("content","footer"); ?>