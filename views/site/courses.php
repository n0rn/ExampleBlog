<?php

use yii\widgets\LinkPager;

$this->title = "Courses";

$this->registerMetaTag([
'name' => 'description',
'content' => 'Some information about courses'

]);

$this->registerMetaTag([
'name' => 'keywords',
'content' => 'Some information about courses'

])
?>

<div id="page">
    <?php foreach($courses as $course){ $number++;?>
    <div class="content">
        <article class="article">
            <div id="content_box">

                <div class="post excerpt ">
                    <header>
                        <div class="bubble"><a href="#"><?=$number?></a></div>
                        <h2 class="title">
                            <a href="#" rel="bookmark"><?=$courses->title?></a>
                        </h2>
                        <div class="post-info">
                            <span class="theauthor"><a href="#" rel="author">MTS</a></span>
                            <time>March 26, 2012</time>
                            <span class="thecategory"><a href="#" rel="category tag">Awesomeness</a></span>
                        </div>
                    </header><!--.header-->
                    <div class="post-content image-caption-format-1">
                        <a href="#" rel="nofollow" id="featured-thumbnail">

                            <div class="featured-thumbnail"><img src="<?=$course->img?>" class="attachment-featured wp-post-image" height="150" width="150"></div>															</a>
                        <p><?=$course->description?></p>
                        <p class="more"><a href="<?=$course->link?>">Read More…</a></p>
                    </div>
                </div><!--.post excerpt-->
    <?php }?>
