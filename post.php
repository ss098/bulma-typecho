<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="article">
    <section class="detail-header has-text-centered">
        <?php $this->title() ?>
    </section>

    <section class="content">
        <?php $this->content('阅读剩余部分') ?>
    </section>
</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
