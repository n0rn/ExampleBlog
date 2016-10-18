<?php

use yii\widgets\LinkPager;

$this->title = "Sites";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Some information about sites'

]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Some information about sites'

])
?>

<div id="page">
    <?php foreach($sites as $site){ $number++;?>
    <div class="content">
        <article class="article">
            <div id="content_box">

                <div class="post excerpt ">
                    <header>
                        <h2 class="title">
                            <a href="#" rel="bookmark"><?=$site->title?></a>
                        </h2>
                        <div class="post-info">
                            <span class="theauthor"><a href="#" rel="author">MTS</a></span>
                            <time>March 26, 2012</time>
                            <span class="thecategory"><a href="#" rel="category tag">Awesomeness</a></span>
                        </div>
                    </header><!--.header-->
                    <div class="post-content image-caption-format-1">
                        <a href="#" rel="nofollow" id="featured-thumbnail">

                            <div class="featured-thumbnail"><img src="<?=$site->img?>" class="attachment-featured wp-post-image" height="150" width="150"></div>															</a>
                        <p><?=$site->description?></p>
                        <p class="more"><a href="<?=$site->link?>">Read More…</a></p>
                    </div>
                </div><!--.post excerpt-->
                <?php }?>
