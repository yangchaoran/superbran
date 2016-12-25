<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<?php include template("content","nav"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/achievement.css">
<section>
    <div id="news">
        <div class="news2" id="">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6318845f9e2dca8cb5b87c5e499d00e2&action=lists&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <a href="<?php echo $v['url'];?>">
                 <div class="news2_1">
                    <div class="new2_1_12">
                        <?php echo $v['title'];?>
                    </div>
                </div>
            </a>
            <div class="clearline"></div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</section>
<footer>
    <p>临汾方圆建设监理有限公司</p>
    <p>晋ICP备13005861号-1</p>
</footer>
</body>
</html>