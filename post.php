<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article>
    <section class="section">
        <p class="article-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></p>

        <div class="field is-grouped is-grouped-multiline" style="margin: 2em 0;">
            <div class="control">
                <p class="tags has-addons">
                    <span class="tag is-info">分类</span>
                    <span class="tag"><?php $this->category('，', true, '无') ?></span>
                </p>
            </div>
            <div class="control">
                <p class="tags has-addons">
                    <span class="tag is-info">分类</span>
                    <span class="tag"><?php $this->category('，', true, '无') ?></span>
                </p>
            </div>
            <div class="control">
                <p class="tags has-addons">
                    <span class="tag is-info">作者</span>
                    <a class="tag" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                </p>
            </div>
            <div class="control">
                <p class="tags has-addons">
                    <span class="tag is-info">时间</span>
                    <span class="tag"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span>
                </p>
            </div>
        </div>
    </section>

    <section class="section content">
        <?php $this->content() ?>
    </section>
</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
