<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢腾鞋业</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/normalize.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/about.css
">
<script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
<script src="<?php echo JS_PATH;?>myjs/index.js"></script>
<body>
<div id="wrapper">
<!-- 网页首部 -->
	<div id="header">
		<div class="box">
			<div class="item1">
				<em>·</em>
				<a href="##" class="n1"><span>欢迎进入本网站!</span></a>
			</div>
			<ul>
				<li class="item">
					<em></em>
					<a href="##" class="n2">设为首页</a></li>
				<li class="item">
					<em></em>
					<a href="##" class="n3">加入收藏</a>
				</li>
				<li class="item">
					<em></em>
					<a href="##" class="n4">联系我们</a>
				</li>
			</ul>
		</div>
	</div>
<!-- 导航区 -->
	<div id="#Nav_w">
	<div class="box">
		<div class="nav">
			<div class="logo">
				<img src="<?php echo IMG_PATH;?>myimg/logo.png">
			</div>
			<ul class="navgation">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51eaf7fa9a3a67ac3ffd2f0633041d74&action=category&catid=0&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'7',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li class="list" style="background: url(<?php echo $v['image'];?>) center no-repeat">
					<a href="<?php echo $v['url'];?>" class="link"><?php echo $v['catename'];?></a>
				</li>
				<!-- <li class="list nav2"><a href="#" class="link"></a></li>
				<li class="list nav3"><a href="#" class="link"></a></li>
				<li class="list nav4"><a href="#" class="link"></a></li>
				<li class="list nav5"><a href="#" class="link"></a></li>
				<li class="list nav6"><a href="#" class="link"></a></li>
				<li class="list nav7"><a href="#" class="link"></a></li> -->
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>

	</div>
	
	</div>