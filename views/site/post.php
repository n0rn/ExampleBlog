<?php
use yii\widgets\LinkPager;

$this->title = $post->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $post->meta_desc

]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $post->meta_key

]);
?>
        <div id="post">
            <div class="content">
            <article class="article">
            <div id="content_box">

            <div class="post excerpt ">
                <header>

                    <h2 class="title">
                    <a href="#" rel="bookmark"><?=$post->title?></a>
                </h2>
                <div class="post-info">
                    <span class="theauthor"><a href="#" rel="author">MTS</a></span>
                    <time>March 26, 2012</time>
                    <span class="thecategory"><a href="#" rel="category tag">Awesomeness</a></span>
                </div>
            </header><!--.header-->

                    <div class="featured-thumbnail"><img src="<?=$post->img?>" class="attachment-featured wp-post-image" height="150" width="150"></div>															</a>
                <p><?=$post->full_text?></p>
            </div>
        </div><!--.post excerpt-->
