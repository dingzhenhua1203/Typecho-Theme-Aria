<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end .row -->
</div><!-- end .container -->
</div><!-- end #body -->
</div><!-- end #pjax-container -->
<div id="go-top" onclick="goTop(this);"><img no-lazyload src="<?php $this->options->themeUrl('assets/img/goTop.png'); ?>">
    <!--div id="scroll-percentage"></div-->
</div>
<footer id="footer" role="contentinfo">
    <?php $this->options->customFooter(); ?>
    <span style="font-size:15px;" id="runtimeSpan"></span>
    <script type="text/javascript">
        function ShowRuntime() {
            // 初始时间，日/月/年 时:分:秒
            BirthDay = new Date("2019-10-31 00:00:00");
            Current = new Date();
            TimeDiff = (Current.getTime() - BirthDay.getTime());
            OneDay = 24 * 60 * 60 * 1000;
            days = TimeDiff / OneDay;
            Days = Math.floor(days);
            hours = (days - Days) * 24;
            Hours = Math.floor(hours);
            mins = (hours - Hours) * 60;
            Mins = Math.floor(mins);
            Secs = Math.floor((mins - Mins) * 60);
            //信息写入到DIV中
            runtimeSpan.innerHTML = "本站已勉强运行了: " + Days + "天" + Hours + "小时" + Mins + "分" + Secs + "秒"
        }
        setInterval(ShowRuntime, 1000);
    </script>
    <?php if (Utils::isEnabled('showHitokoto', 'AriaConfig')) : ?><p id="hitokoto"></p><?php endif; ?>
    <p id="footer-info">&copy; <span><?php echo $this->options->cpr ? $this->options->cpr : date('Y'); ?></span><?php Utils::getFooterWidget(); ?></p>
    <span><a href="https://dcmickey.cn/sitemap.xml"> • 站点地图</span>
    <span><a href="http://www.beian.miit.gov.cn/"> • 苏ICP备xxxxx号</span>
    <div>
        <a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral"><img no-lazyload height="45" width="100" src="/ypyun_logo.png"></a>
    </div>
</footer><!-- end #footer -->
<?php if (Utils::isEnabled('enablePjax', 'AriaConfig')) : ?>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.pjax.min.js'); ?>"></script>
<?php endif; ?>
<?php if (Utils::isEnabled('enableFancybox', 'AriaConfig')) : ?>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.fancybox.min.js'); ?>"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('assets/js/highlight.min.js'); ?>"></script>
<?php if (Utils::isEnabled('enableLazyload', 'AriaConfig')) : ?>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.lazyload.min.js'); ?>"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('assets/OwO/OwO.min.js') ?>"></script>
<?php if (Utils::isEnabled('enableMathJax', 'AriaConfig')) : ?>
    <script type="text/x-mathjax-config"><?php $this->options->MathJaxConfig(); ?></script>
    <script src="//cdn.jsdelivr.net/npm/mathjax@latest/MathJax.js?config=TeX-AMS-MML_SVG.js"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('assets/js/functions.min.js?v=8b426df9ab'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/main.min.js?v=de446d9d66'); ?>"></script>
<?php echo $this->options->customScript ? "<script>" . $this->options->customScript . "</script>\n" : ""; ?>
<?php if ($this->options->statistics) $this->options->statistics(); ?>
<?php $this->footer(); ?>
</body>

</html>