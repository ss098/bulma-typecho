<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="section columns is-centered">
    <div class="column is-two-fifths">
        <article class="article">
            <section class="content">
                <?php $this->content() ?>
            </section>
        </article>
    </div>
</div>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
