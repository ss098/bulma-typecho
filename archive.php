<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="main">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="box">
                <div class="content">
                    <div style="margin-bottom: 1em;">
                        <a class="title" style="font-size: 1.4em;" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>

                        <p class="toolbar">
                            <a href="<?php $this->author->permalink(); ?>">@<?php $this->author(); ?></a></span>
                            <time style="margin-left: 1em;" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                            <span style="margin-left: 1em;"><?php $this->category('，'); ?></span>
                            <a style="margin-left: 1em;" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                        </p>
                    </div>

                    <?php $this->content('阅读剩余部分'); ?>
                </div>
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
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
