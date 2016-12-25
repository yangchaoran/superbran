<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<?php include template("content","nav"); ?>
<link rel="stylesheet" href="{CSS_PATH/mycss/summary.css}">
<section>
    <article>
        <div class="" id="article">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2a01f9d9fc0e21b6ac05752c278875d&action=lists&catid=3&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','moreinfo'=>'1','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="title" ><?php echo $v['title'];?></div>
            <div class="article" >
                <?php echo $v['content'];?>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>　
        </div>
    </article>
</section>
<footer>
    <p>临汾方圆建设监理有限公司</p>
    <p>晋ICP备13005861号-1</p>
</footer>
</body>
</html>