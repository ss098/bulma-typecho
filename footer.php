<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    </div>
</div>

<footer class="container" style="padding-top: 2em;padding-bottom: 2em;">
    <div class="content has-text-centered">
        <p>
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> 由 Typecho 驱动
        </p>
        <p>
            <a href="<?php $this->options->feedUrl(); ?>" target="_blank">
                RSS 地址
            </a>
        </p>
    </div>
</footer>
</body>
</html>
