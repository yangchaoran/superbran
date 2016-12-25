<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>

<!-- 轮播图 -->
	<div id="banner">
		<div class="box">
			<div id="Ban_top">
	        	<ul>
	            	<li><img src="<?php echo IMG_PATH;?>myimg/20131224135904.jpg"></li>
	                <li style="display:none;"><img src="<?php echo IMG_PATH;?>myimg/20131224113507.jpg"></li>
	                <li style="display:none"><img src="<?php echo IMG_PATH;?>myimg/20131224113522.jpg"></li>
	            </ul>
        	</div>
        	<div id="Ban_li">
        	<ul>
            	<li class="Ban_li"></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
		</div>
	</div>
<!--展示区  -->
	<div id="introduce">
		<div class="box">
			<ul class="int">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ad6100e5c81bbe89f3b433ae14ca1645&action=category&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li class="by1"><a href="<?php echo $CATEGORYS['11']['url'];?>"></a></li>
				<li class="by2"><a href="<?php echo $CATEGORYS['12']['url'];?>"></a></li>
				<li class="by3"><a href="<?php echo $CATEGORYS['16']['url'];?>"></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</div>

<?php include template("content","myfooter"); ?>