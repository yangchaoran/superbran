<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/news.css">
<!-- main -->
<div id="main">
	<div class="ab-banner">
		<div class="zy-banner"></div>
	</div>
	<div class="box contaninor">
	
	<div class="body-left">
	<ul>        
	  <li><a href="index.php?p=newslist&amp;c_id=53&amp;lanmu=1">新闻动态</a></li>
    </ul>
	</div>
	<div class="body-right">
		<div class="title">
        	<span>新闻动态<em>NEWS</em></span>
            <em><a href="index.php">首页</a> &gt; 新闻动态</em>
        </div>
		<div class="News_list">
        	<ul>            	                                
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>    
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>                                 
                <li><span>
                <a href="<?php echo $v['url'];?>">
                <?php echo $v['title'];?>
                </a>
                </span>
                    <?php echo $v['inputtime'];?>
                    <em>{date(‘Y-m-d’,1482368425}</em>
                </li>       
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                   
            </ul>
            <div class="clear"></div>
            <div class="page"></div>
        </div>		
	</div>
	</div>
</div>
<!--展示区  -->

<!-- 网页底部 -->
	<!-- <div id="footer">
		<div class="erweima"></div>
		<ul class="company-link">
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
			<li class="word"><a href=""></a></li>
			<li class="segmentation">|</li>
		</ul>
		<div class="z"></div>
	</div> -->
<?php include template("content","myfooter"); ?>