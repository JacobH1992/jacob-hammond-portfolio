<?php

$urlVars  = explode('/', $q);
$url = $urlVars[2];

require_once('php/getData.php');

if($env) {
    $file = 'details';
} else {
    $file = '404';
}