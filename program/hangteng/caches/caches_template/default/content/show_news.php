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
                                 
                <li><span>
               	<p><?php echo $title;?></p>
                <article>
                	<?php echo $content;?>
                </article>
                </span>
					<em><?php echo $updatetime;?></em>
                </li>                     
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