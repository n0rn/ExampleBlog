<?php

use yii\widgets\LinkPager;

$this->title = "Reviews";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Some information about reviews'

]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Some information about reviews'

])
?>

<div id="page">
    <?php foreach($reviews as $review){ $number++;?>
    <div class="content">
        <article class="article">
            <div id="content_box">

                <div class="post excerpt ">
                    <header>
                        <div class="bubble"><a href="#"><?=$number?></a></div>
                        <h2 class="title">
                            <a href="#" rel="bookmark"><?=$review->title?></a>
                        </h2>
                        <div class="post-info">
                            <span class="theauthor"><a href="#" rel="author">MTS</a></span>
                            <time>March 26, 2012</time>
                            <span class="thecategory"><a href="#" rel="category tag">Awesomeness</a></span>
                        </div>
                    </header><!--.header-->
                    <div class="post-content image-caption-format-1">
                        <a href="#" rel="nofollow" id="featured-thumbnail">

                            <div class="featured-thumbnail"><img src="<?=$review->img?>" class="attachment-featured wp-post-image" height="150" width="150"></div>															</a>
                        <p><?=$review->description?></p>
                        <p class="more"><a href="<?=$review->link?>">Read More…</a></p>
                    </div>
                </div><!--.post excerpt-->
                <?php }?>
