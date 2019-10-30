<?php
/**
 * 基于 Bulma.css 的 Typecho 模板
 *
 * @package bulma-typecho
 * @author cenegd
 * @version 3
 * @link https://www.qiyichao.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<section class="hero is-medium is-dark is-bold">
    <div class="hero-body">
        <div class="container has-text-centered"><h1 class="title">
                <?php $this->options->title() ?>
            </h1>
            <h2 class="subtitle">
                <?php $this->options->description() ?>
            </h2>
        </div>
    </div>
</section>

<div class="section columns is-centered">
    <div class="column is-two-fifths">
        <?php while ($this->next()): ?>
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

        <div class="pagination is-centered" style="margin-top: 1em;">
            <?php $this->pageNav('上一页', '下一页', 3, '...', [
                'wrapTag' => 'ul',
                'wrapClass' => 'pagination-list',
                'itemTag' => 'li class="pagination-link"',
                'textTag' => 'a',
                'currentClass' => 'is-current',
                'prevClass' => 'pagination-previous',
                'nextClass' => 'pagination-next'
            ]); ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>
