<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="section columns is-centered">
    <div class="column is-two-fifths">
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
                <article class="article">
                    <a href="<?php $this->permalink() ?>">
                        <section class="header">
                            <?php $this->title() ?>
                        </section>
                    </a>

                    <section class="content">
                        <?php $this->content('阅读文章的剩余部分') ?>
                    </section>
                </article>
        <?php endwhile; ?>
        <?php else: ?>
            <div class="notification">
                没有找到内容，请重试
            </div>
        <?php endif; ?>

        <div class="pagination is-centered" style="margin-top: 1em;">
            <?php $this->pageNav('上一页', '下一页', 3, '...', [
                'wrapTag' => 'ul',
                'wrapClass' => 'pagination-list',
                'itemTag'       =>  'li class="pagination-link"',
                'textTag'       =>  'a',
                'currentClass'  =>  'current',
                'prevClass'     =>  'pagination-previous',
                'nextClass'     =>  'pagination-next'
            ]); ?>
        </div>
    </div>
</div>

	<?php $this->need('footer.php'); ?>
