<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><nav>
    <ul>
        <li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96673d9b5bfcbed9f0861acc96934bcd&action=category&postid=1&order=listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('postid'=>'1','order'=>'listorder ASC','limit'=>'4',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>	
</nav>