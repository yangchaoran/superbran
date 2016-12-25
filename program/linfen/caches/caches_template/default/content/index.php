<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<?php include template("content","nav"); ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>img/1-15120Q23432V2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>img/1-15120Q2333GG.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>img/1-15120Q234092S.jpg" alt="">
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
        </div>
        <div class="swiper-button-next btn">&gt</div>
        <div class="swiper-button-prev btn">&lt</div>
    </div>
    <section>
        <div id="about">
            <div class="about">
                <h3>企业简介</h3>
                <em>ABOUT</em>
            </div>
            <div class="clearline"></div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2a01f9d9fc0e21b6ac05752c278875d&action=lists&catid=3&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','moreinfo'=>'1','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <article>
                <?php echo str_cut(strip_tags($v[description]),150,'[&hellip;]');?>
                <a href="<?php echo $v['url'];?>">
                    <span class="row"></span>
                    <span>了解更多</span>
                </a>
            </article>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </section>
<section>
    <div id="projects">
        <div class="projects">
            <h3>工程业绩</h3>
            <em>PROJECTS</em>
        </div>
        <div class="clearline"></div>
        <div class="newslist">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12260475c5c7ded43f9366052754f133&action=position&posid=19&order=listorder+DESC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'12',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <a href="<?php echo $v['url'];?>">
                <div class="new2">
                    <div class="title"><?php echo $v['title'];?></div>
                    <div class="new2_1">
                        <img src="<?php echo $v['thumb'];?>" alt="">
                    </div>
                    <div class="detailed">
                        <p class="newsp1">
                            ...
                            <em>[详细]</em>
                        </p>
                        <p class="time">发表于：<?php echo $v['updatatime'];?></p>
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
<script src="<?php echo JS_PATH;?>myjs/swiper.min.js"></script>
<script src="<?php echo JS_PATH;?>myjs/basic.js"></script>
<script src="<?php echo JS_PATH;?>myjs/index.js"></script>
</html>