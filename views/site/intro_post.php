<div id="page">
    <div class="content">
        <?=$content?>

        <article class="article">
            <div id="content_box">

                <div class="post excerpt ">
                    <header>
                        <div class="bubble"><a href="#">4</a></div>
                        <h2 class="<?=$post->title?></h2>
                        <div class="post-info">
                            <span class="theauthor"><a href="#" rel="author">MTS</a></span>
                            <time>March 26, 2012</time>
                            <span class="thecategory"><a href="#" rel="category tag">Awesomeness</a></span>
                        </div>
                    </header><!--.header-->
                    <div class="post-content image-caption-format-1">
                        <a href="#" rel="nofollow" id="featured-thumbnail">

                            <div class="featured-thumbnail"><img src="<?=$post->img?>" class="attachment-featured wp-post-image" height="150" width="150"></div>															</a>
                        <p><?=$post->intro_text?> </p>
                        <p class="more"><a href="<?=$post->link?>">Read More…</a></p>
                    </div>
                </div><!--.post excerpt-->
                <div class="pnavigation2">
                    <div class="nav-previous left"><a href="#"><span class="meta-nav">←</span> Older posts</a></div>
                    <div class="nav-next right"></div>
                </div>

            </div>
        </article>

        <aside class="sidebar c-4-12">
            <div id="sidebars" class="g">
                <div class="sidebar">
                    <ul class="sidebar_list">
                        <li class="widget widget-sidebar">
                            <form method="get" id="searchform" class="search-form" _lpchecked="1">
                                <fieldset>
                                    <input name="s" id="s" value="Search this Site..." type="text">
                                    <input id="search-image" class="sbutton" src="images/search.png" style="border: 0px none; vertical-align: top;" type="image">
                                </fieldset>
                            </form>
                        </li>

                        <li class="widget widget-sidebar"><div class="ad-300"><a href="#"><img src="images/stylishuserinterface300x250.jpg" height="250" width="300"></a></div></li>
                        <li class="widget widget-sidebar"><h3>Our Sponsors</h3><div class="ad-125"><ul><li class="oddad"><a href="#"><img src="images/125x125.gif" height="125" width="125"></a></li><li class="evenad"><a href="#"><img src="images/125x125.gif" height="125" width="125"></a></li></ul></div></li>
                        <li class="widget widget-sidebar">		<h3>Recent Posts</h3>		<ul>
                                <li><a href="#">Porttitor Lectus Tincidunt Elementum Nascetur Montes</a></li>
                                <li><a href="#">Mauris Dictum Libero Id Justo Fusce In Est</a></li>
                                <li><a href="#">Cum Sociis Natoque Penatibus Magnis</a></li>
                                <li><a href="#">Aliquet Pid Massa Porttitor Dictumst Ac Aenean A Dolor?</a></li>
                                <li><a href="#">Quotes Time!</a></li>
                            </ul>
                        </li>
                        <li class="widget widget-sidebar">
                            <div class="mts-subscribe">

                                <form style="" action="#" method="post" target="popupwindow" _lpchecked="1">
                                    <input value="Your email Address..." type="text">
                                    <input value="mythemeshop" name="uri" type="hidden"><input name="loc" value="en_US" type="hidden"><input value="Subscribe" type="submit">
                                </form>

                                <div class="result"></div>

                            </div><!--subscribe_widget-->

                        </li>
                    </ul>
                </div>
            </div><!--sidebars-->
        </aside>

    </div><!--#page-->