<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/message.css">
<!-- main -->
<div id="main">
	<div class="ab-banner">
		<div class="zy-banner"></div>
	</div>
	<div class="box contaninor">
	
	<div class="body-left">
		<ul>

            <li><a href="index.php?p=gbook">在线留言</a></li>

        </ul>
	</div>
	<div class="body-right">
		<div class="title">

        	<span>在线留言<em>MESSAGE</em></span>

            <em><a href="index.php">首页</a> &gt; 在线留言</em>

        </div>
		<div class="gbook">

        <form method="post" action="inc/gbooksave.php">

        	<table cellpadding="0" cellspacing="0">

            	<tbody><tr>

                	<td>留言标题</td>

                    <td><input type="text" name="fn_title"></td>

                </tr>

                <tr>

                	<td>您的姓名</td>

                    <td><input type="text" name="fn_name"></td>

                </tr>

                <tr>

                	<td>电子邮件</td>

                    <td><input type="text" name="fn_email"></td>

                </tr>

                <tr>

                	<td>联系方式</td>

                    <td><input type="text" name="fn_tel"></td>

                </tr>

                <tr>

                	<td>留言内容</td>

                    <td><textarea name="fn_content" cols="" rows=""></textarea></td>

                </tr>

                <tr>

                	<td></td>

                    <td><input type="submit" id="gb" value="" style="cursor:pointer;"></td>

                </tr>

            </tbody></table>

            </form>

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