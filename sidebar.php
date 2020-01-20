<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-3" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowHotPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">热门文章</h3>
        <ul class="widget-list">
        <?php Contents_Post_Initial($this->options->postsListSize, 'views'); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">最新文章</h3>
        <ul class="widget-list">
        <?php Contents_Post_Initial($this->options->postsListSize); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget paddingall">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list RecentReply zface-box">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><span itemprop="image">
            <?php $number=$comments->mail; echo '<img src="https://q2.qlogo.cn/headimg_dl? bs='.$number.'&dst_uin='.$number.'&dst_uin='.$number.'&;dst_uin='.$number.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" width="24px" height="24px" style="border-radius: 50%;margin-right: 10px;">'; ?>
            </span>
            <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(30, '...'); ?>
            </li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTag', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">标签</h3>
        <ul class="widget-tile">
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
        <?php if($tags->have()): ?>
        <?php while($tags->next()): ?>
        <li><a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a></li>
        <?php endwhile; ?>
        <?php else: ?>
        <li>暂无标签</li>
        <?php endif; ?>
        </ul>
    </section>
    <?php endif; ?>
</div><!-- end #sidebar -->
