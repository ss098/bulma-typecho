<?php
/**
 * 基于 Bulma.css 的 Typecho 模板
 * 
 * @package bulma-typecho
 * @author cenegd
 * @version 1
 * @link https://www.qiyichao.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

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
<div class="pagination is-centered" style="margin-top: 1em;">
    <?php $this->pageNav('上一页', '下一页', 3, '...', [
        'wrapTag' => 'ul',
        'wrapClass' => 'pagination-list',
        'itemTag'       =>  'li class="pagination-link"',
        'textTag'       =>  'a',
        'currentClass'  =>  'is-current',
        'prevClass'     =>  'pagination-previous',
        'nextClass'     =>  'pagination-next'
    ]); ?>
</div>

<?php $this->need('footer.php'); ?>
