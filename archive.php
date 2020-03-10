<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="col-mb-12 col-8 col-offset-2" >
    <div style="border-radius: 5px;
    background-color: #fff;
    margin: 30px 0;
    color: rgba(0,0,0,.7);
    padding: 15px;">
    <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
    </div>
    <?php while($this->next()): ?>
        <article itemscope itemtype="http://schema.org/BlogPosting" class="card animated wow fadeIn" data-wow-duration="1s" data-wow-offset="10">
                <a href="<?php $this->permalink(); ?>">
                <div >
                    <?php $this->sticky(); ?>
                </div>
                    <?php if(Utils::isEnabled('enableLazyload','AriaConfig')): ?>
                    <div class="card-thumbnail lazyload" data-original=<?php if($this->fields->thumbnail)
                                $this->fields->thumbnail();
                            else
                                echo Utils::getThumbnail();
                        ?> style="background:url(<?php $this->options->themeUrl('assets/img/loading.svg') ?>) center center no-repeat;background-size: 100% auto;">
                    </div>
                    <?php else: ?>
                    <div class="card-thumbnail" style="background:url(<?php if($this->fields->thumbnail)
                                $this->fields->thumbnail();
                            else
                                echo Utils::getThumbnail();
                        ?>) center center no-repeat;background-size: 100% auto;">
                    </div>
                    <?php endif; ?>
                    <div class="articalSite">
                        <a class='articalTitle' href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
                        <div class='articalDescription'>
                                <span> <?php $this->date(); ?>・</span><span><?php  $this->category('・',false,'无');   ?>・</span>
                                <span ><i class="iconfont icon-aria-comment"></i> <?php $this->commentsNum('%d'); ?> </span>
                        </div> 
                    </div>
                </a>
            </article>
    <?php endwhile; ?>

     <div id="page-nav">
        <?php $this->pageNav('<', '>',1,'...',array('wrapTag' => 'ul', 'wrapClass' => '','itemTag' => 'li','currentClass' => 'page-current',)); ?>  
     </div>
</div><!-- end #main-->

	
	<?php $this->need('footer.php'); ?>
