<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <meta name="keywords" content="网页关键字">
    <meta name="description" content="网页描述">
    <!--定义网页搜索引擎索引方式-->
    <meta name="robots" content="index,all">
    <link rel="canonical" href="网站绝对地址"/>
    <!-- 告诉搜索引擎站点作者 -->
    <meta name="author" content="author">
    <!--用以说明生成工具（如Microsoft,FrontPage 4.0,typecho）等-->
    <meta name="generator" content="Typecho 1.1/17.10.30"/>
    <!-- 告诉搜索引擎站点模版的作者 -->
    <meta name="template" content="molerose"/>
    <meta http-equiv="Page-Exit" contect="revealTrans(duration=20，transtion=6) ">
    <!--百度禁止转码-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>


    <!--优先使用 IE 最新版本和 Chrome-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--    360 使用Google Chrome Frame-->
    <meta name="renderer" content="webkit">


    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a
        href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
                <?php if ($this->options->logoUrl): ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
                    </a>
                <?php else: ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                    <p class="description"><?php $this->options->description() ?></p>
                <?php endif; ?>
            </div>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>"/>
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
            <div class="col-mb-12">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                            href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>
                                href="<?php $pages->permalink(); ?>"
                                title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    
