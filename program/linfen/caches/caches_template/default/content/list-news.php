<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<?php include template("content","nav"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
<link rel="stylesheet" href="{CSS_PATH/mycss/news.css}">
<section>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55334d2c6c7a8df529be6ce2bb1bd0fe&action=lists&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'20',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
    <ul id="news">
        <li class="newsTile">
            <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>

        </li>
    </ul>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</section>
<footer>
    <p>临汾方圆建设监理有限公司</p>
    <p>晋ICP备13005861号-1</p>
</footer>
</body>
</html>