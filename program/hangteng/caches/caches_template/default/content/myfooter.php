<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<div id="copyright_w">
	    <div class="box" id="copyright">
	    <table border="0" width="82%">
		<tbody>
			<tr>
				<td width="45">
					<img alt="" src="<?php echo IMG_PATH;?>myimg/20131224033743_76840.jpg">
				</td>
				<td width="44">
					<img alt="" src="<?php echo IMG_PATH;?>myimg/20131224033546_71751.jpg"> 
				</td>
				<td width="51">
					<br>
				</td>
				<td width="634">
				<p>
					<a href="<?php echo $CATEGORYS['10']['url'];?>"><span style="color:#666666;">首页</span></a>
					<span style="color:#666666;"> | </span>
					<a href="<?php echo $CATEGORYS['11']['url'];?>">
						<span style="color:#666666;">品牌介绍</span>
					</a>
					<span style="color:#666666;">| </span>
					<a href="<?php echo $CATEGORYS['12']['url'];?>">
						<span style="color:#666666;">新闻动态</span>
					</a>
					<span style="color:#666666;">| </span>

					<a href="<?php echo $CATEGORYS['13']['url'];?>">
						<span style="color:#666666;">产品展示</span></a>
					<span style="color:#666666;"> | </span>
					<a href="<?php echo $CATEGORYS['14']['url'];?>">
						<span style="color:#666666;">服务专区</span></a>
					<span style="color:#666666;">| </span>
					<a href="<?php echo $CATEGORYS['15']['url'];?>">
						<span style="color:#666666;">在线留言</span></a>
					<span style="color:#666666;">| </span>
					<a href="<?php echo $CATEGORYS['16']['url'];?>">
						<span style="color:#666666;">联系我们</span></a>
				</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f035abc9c95f2b23c4fc15597f157e22&action=lists&catid=17&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $s) { ?>
				<p style="margin-right: 10px;">
					<span>版权所有：<?php echo $s['copyright'];?></span>
					<span>备案号：<?php echo $s['beian'];?></span>

					<span>手机：<?php echo $s['phone'];?></span>
					<span>固话：<?php echo $s['tel'];?></span>
				</p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</td>
				<!--<td width="634">-->
					<!--<p align="left">-->
					<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e584e0fd3521b5eff46a385c0fc7bbdc&action=lists&catid=26&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','limit'=>'20',));}?>-->
					<!--&lt;!&ndash;<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e584e0fd3521b5eff46a385c0fc7bbdc&action=lists&catid=26&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','limit'=>'20',));}?>&ndash;&gt;-->
					<!--<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
						<!--<span>-->
							<!--<a href="<?php echo $CATEGORYS['10']['url'];?>"><span style="color:#666666;"><?php echo $v['index'];?></span></a>-->
							<!--<span style="color:#666666;"> | </span>-->
							<!--<a href="<?php echo $CATEGORYS['11']['url'];?>">-->
							<!--<span style="color:#666666;"><?php echo $v['about'];?></span>-->
							<!--</a>-->
							<!--<a href="<?php echo $CATEGORYS['12']['url'];?>">-->
							<!--</a>-->
							<!--<span style="color:#666666;">| </span>-->
							<!--<a href="<?php echo $CATEGORYS['13']['url'];?>">-->
							<!--<span style="color:#666666;"><?php echo $v['news'];?></span>-->
							<!--</a><span style="color:#666666;"> |</span> -->
							<!--<a href="<?php echo $CATEGORYS['14']['url'];?>">-->
							<!--<span style="color:#666666;"><?php echo $v['product'];?></span></a>-->
							<!--<span style="color:#666666;"> | </span>-->
							<!--<a href="<?php echo $CATEGORYS['15']['url'];?>">-->
							<!--<span style="color:#666666;"><?php echo $v['service'];?>服务专区</span></a>-->
							<!--<a href=""> </a>-->
							<!--<span style="color:#666666;">| </span>-->
							<!--<span></span>-->
							<!--<a href="<?php echo $CATEGORYS['16']['url'];?>"><span style="color:#666666;"><?php echo $v['message'];?>在线留言</span>-->
							<!--</a>-->
							<!--<a href=""><span></span>-->
							<!--</a>-->
							<!--<span style="color:#666666;">| </span>-->
							<!--<a href="">-->
							<!--<span style="color:#666666;"><?php echo $v['contact'];?></span></a>-->
						<!--</span> -->
					<!--</p>-->
					<!--<p align="left">-->
						<!--<span style="color:#666666;">版权所有：<?php echo $v['cright'];?> </span>-->
						<!--<a href="" target="_blank">-->
							<!--<span style="color:#666666;">备案号：<?php echo $v['beian'];?></span>-->
						<!--</a>-->
						<!--<span style="color:#666666;">手机： <?php echo $v['phone'];?>&nbsp; 固话：<?php echo $v['tel'];?></span>-->
					<!--</p>-->
				<!--</td>-->
				<td>
					<img alt="" src="<?php echo IMG_PATH;?>myimg/20131224055204_55041.png"><br>
				</td>
			</tr>
		</tbody>
		</table>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
</div>
</body>
</html>