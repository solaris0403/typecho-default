<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    <a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral">
        <div id="icon-upaiyun">
            <img src="<?php $this->options->themeUrl('/img/upaiyun.png'); ?>" alt="">
        </div>
    </a>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
