<?php

use yii\widgets\LinkPager;

$this->title = "Search $q";

$this->registerMetaTag([
    'name' => 'description',
    'content' => "Search: $q."

]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $q

]);
?>
<?php if ($q == "") { ?>
<h2>Searching results: <?=$q?> </h2>
<?php }?>
<?php if (!$posts) { ?>
    <p>Not found</p>
<?php } ?>