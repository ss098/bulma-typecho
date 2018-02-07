<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div role="main" class="columns">
    <div class="column">
        <article class="box">
            <div class="content">
                <?php $this->content(); ?>
            </div>
        </article>

        <?php $this->need('comments.php'); ?>
    </div>
    <div class="column is-one-quarter">
        <div style="padding: 1em;">
            <p class="tags has-addons">
                <span class="tag is-info">作者</span>
                <a class="tag" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
            </p>
            <p class="tags has-addons">
                <span class="tag is-info">分类</span>
                <span class="tag"><?php $this->category('，', true, '无') ?></span>
            </p>
            <p class="tags has-addons">
                <span class="tag is-info">时间</span>
                <span class="tag"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span>
            </p>
            <p class="tags has-addons">
                <span class="tag is-info">标签</span>
                <span class="tag"><?php $this->tags('，', true, '无'); ?></span>
            </p>
        </div>
    </div>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
