<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="section columns is-centered">
    <div class="column is-two-fifths">
        <article class="article">
            <section class="has-text-centered">
                <div class="detail-header">
                    <?php $this->title() ?>
                </div>

                <div class="has-text-grey-light">
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发表于 <?php $this->date('Y 年 m 月 d 日'); ?></time>
                </div>
            </section>

            <section class="content">
                <?php $this->content('阅读文章的剩余部分') ?>
            </section>
        </article>
    </div>
</div>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
