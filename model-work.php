<?php

$category = (isset($_GET["category"]) ? $_GET["category"] : "");

require_once('php/getData.php');

$categoryNames = array("web","graphic-design","digital-art","3d","mobile-app","photography","production","");

if($isWork && in_array($category, $categoryNames)) {
    $file = 'work';
} else {
    $file = '404';
}