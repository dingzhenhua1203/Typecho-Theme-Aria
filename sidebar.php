<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-3" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('最新文章'); ?></h5>
        <ul class="widget-list">
           <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h5 class="widget-title"><?php _e('最近回复'); ?></h5>
        <ul class="widget-list RecentReply zface-box">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><span itemprop="image"><?php $number=$comments->mail; echo '<img src="https://q2.qlogo.cn/headimg_dl? bs='.$number.'&dst_uin='.$number.'&dst_uin='.$number.'&;dst_uin='.$number.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" width="24px" height="24px" style="border-radius: 50%;margin-right: 10px;">'; ?></span><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(100, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>
</div><!-- end #sidebar -->
