<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article>
    <section class="has-text-centered" style="margin-top: 1em;">
        <p class="article-title"><?php $this->title() ?></p>
    </section>

    <section class="section content">
        <?php $this->content() ?>
    </section>
</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
