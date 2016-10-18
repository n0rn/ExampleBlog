<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\widgets\LinkPager;

$this->title = "Blog";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Some information about blog'

]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Some information about blog'

])
?>
<?php
 foreach($posts as $post)
     include "intro_post.php";


?>


    <div id="page">
        <div class="content">
            <?=$content?>

                    <div class="pnavigation2">
                        <?=LinkPager::widget([
                            'pagination' => $pagination,
                            'firstPageLebel' => 'First',
                            'lastPageLabel' => 'Last',
                            'prevPageLabel' => 'Prev',

                        ])?>
                        <span>Page <?=$active_page?> from <?=$count_pages?></span>
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
                                        <input id="search-image" class="sbutton" src="/web/images/search.png" style="border: 0px none; vertical-align: top;" type="image">
                                    </fieldset>
                                </form>
                            </li>

                            <li class="widget widget-sidebar"><div class="ad-300"><a href="#"><img src="/web/images/stylishuserinterface300x250.jpg" height="250" width="300"></a></div></li>
                            <li class="widget widget-sidebar"><h3>Our Sponsors</h3><div class="ad-125"><ul><li class="oddad"><a href="#"><img src="/web/images/125x125.gif" height="125" width="125"></a></li><li class="evenad"><a href="#"><img src="/web/images/125x125.gif" height="125" width="125"></a></li></ul></div></li>
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
    </div><!--.container-->
    <footer>
        <div class="container">
            <div class="footer-widgets">
                <div class="f-widget">
                    <div class="widget"><h3>Lorem ipsum</h3>
                        <div class="textwidget">Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur quam
                            augue, vehicula quis, tincidunt vel, varius vitae, nulla. Sed convallis
                            orci. Duis libero orci, pretium a.</div>
                    </div>
                </div>
                <div class="f-widget">
                    <div class="widget"><h3>Consectetuer adipiscing</h3>			<div class="textwidget">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Curabitur</a> quam augue, vehicula quis, tincidunt vel, varius vitae, nulla. Sed convallis orci. Duis libero orci, pretium a.</div>
                    </div>
                </div>
                <div class="f-widget last">
                    <div class="widget">		<h3>Recent Posts</h3>		<ul>
                            <li><a href="#">Porttitor Lectus Tincidunt Elementum Nascetur Montes</a></li>
                            <li><a href="#">Mauris Dictum Libero Id Justo Fusce In Est</a></li>
                            <li><a href="#">Cum Sociis Natoque Penatibus Magnis</a></li>
                            <li><a href="#">Aliquet Pid Massa Porttitor Dictumst Ac Aenean A Dolor?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyrights">
                    <div class="row" id="copyright-note">
                        <span>© <?=date("Y")?></span> - <span>Theme by <a href="http://mythemeshop.com/">MyThemeShop</a>.</span>
                    </div>
                    <div class="top"><a href="#">Back to Top ↑</a></div>
                </div>
            </div><!--.footer-widgets-->
        </div><!--.container-->
    </footer><!--footer-->
    <?php $this->endBody() ?>
    </body></html>
<?php $this->endPage() ?>