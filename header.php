<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bulma.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div class="tabs is-centered">
    <ul>
        <li <?= $this->is('index') ? 'class="is-active"' : '' ?>>
            <?php if ($this->options->logoUrl): ?>
                <a href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>">
                </a>
            <?php else: ?>
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            <?php endif; ?>
        </li>
        <?php foreach ($this->widget('Widget_Metas_Category_List')->stack as $category) { ?>
            <li <?= $this->is('category', $category['slug']) ? 'class="is-active"' : '' ?>>
                <a href="<?= $category['permalink'] ?>"><?= $category['name'] ?></a>
            </li>
        <?php } ?>

        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while ($pages->next()): ?>
            <li <?= $this->is('page', $pages->slug) ? 'class="is-active"' : '' ?>>
                <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>

<div class="container">
    <div class="columns is-centered">
        <div class="column is-three-quarters">
