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
    <script type="text/javascript">
        function hasClass(ele, cls) {
            return ele.className.match(new RegExp("(\\s|^)" + cls + "(\\s|$)"));
        }

        //为指定的dom元素添加样式
        function addClass(ele, cls) {
            if (!this.hasClass(ele, cls)) ele.className += " " + cls;
        }

        //删除指定dom元素的样式
        function removeClass(ele, cls) {
            if (hasClass(ele, cls)) {
                let reg = new RegExp("(\\s|^)" + cls + "(\\s|$)");
                ele.className = ele.className.replace(reg, " ");
            }
        }

        // 菜单开关
        function toggleClass(ele, cls) {
            let ele2 = document.getElementById('navMenuTransparent')
            if (hasClass(ele, cls)) {
                removeClass(ele2, cls);
                removeClass(ele, cls);
            } else {
                addClass(ele, cls);
                addClass(ele2, cls);
            }
        }
    </script>
</head>
<body>
<nav class="navbar is-transparent">
    <div class="container">
        <div class="navbar-brand">
            <?php if ($this->options->logoUrl): ?>
                <a class="navbar-item" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>">
                </a>
            <?php else: ?>
                <a class="navbar-item" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            <?php endif; ?>

            <div class="navbar-burger burger" onclick="toggleClass(this, 'is-active')">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenuTransparent" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        分类
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <?php foreach ($this->widget('Widget_Metas_Category_List')->stack as $category) { ?>
                            <a class="navbar-item<?php echo $this->is('category', $category['slug']) ? ' is-active' : '' ?>"
                               href="<?php echo $category['permalink'] ?>"><?php echo $category['name'] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while ($pages->next()): ?>
                    <a class="navbar-item" href="<?php $pages->permalink(); ?>"
                       title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </div>

            <div class="navbar-end">
                <a class="navbar-item is-hidden-desktop-only" href="<?php $this->options->feedUrl(); ?>"
                   target="_blank">
                    RSS
                </a>
                <?php if ($this->user->hasLogin()): ?>
                    <a class="navbar-item" href="<?php $this->options->adminUrl(); ?>">
                        控制台
                    </a>
                    <a class="navbar-item" href="<?php $this->options->logoutUrl(); ?>">
                        退出
                    </a>
                <?php else: ?>
                    <a class="navbar-item" href="<?php $this->options->adminUrl('login.php'); ?>">
                        登录
                    </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</nav>

<div class="main">
    <div class="container">
