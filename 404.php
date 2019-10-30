<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="section columns is-centered">
    <div class="column is-two-fifths">
        <div class="notification main">
            <p>
                你想查看的页面已被转移或删除了, 要不要搜索看看：
            </p>
            <form method="post" action="<?php $this->options->siteUrl(); ?>" role="search" style="margin: 1em 0;">
                <div class="field has-addons">
                    <div class="control">
                        <input class="input is-small" name="s" type="text" placeholder="<?php $this->options->description() ?>">
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-info is-small">
                            搜索
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
	<?php $this->need('footer.php'); ?>
