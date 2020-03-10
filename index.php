<?php
/**
 * 书写属于自己的篇章
 * 
 * <a href="https://github.com/Siphils/Typecho-Theme-Aria" target="_blank">Github</a> | <a href="https://eriri.ink" target="_blank">Home</a>
 * 
 * @package Aria
 * @author Siphils
 * @version 1.9.0
 * @link https://eriri.ink/archives/Typecho-Theme-Aria.html
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="main" class="col-mb-12 col-8 col-offset-1" >
	<?php while($this->next()): ?>
            <article itemscope itemtype="http://schema.org/BlogPosting" class="card animated wow fadeIn" data-wow-duration="1s" data-wow-offset="10" style='padding:10px ;margin:40px auto;'>
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
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

