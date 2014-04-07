<?php

$urlVars  = explode('/', $q);
$detailsUrl = $urlVars[1];

require_once('php/getData.php');
getDetails($detailsUrl);

if($isDetails) {
    $file = 'details';
} else {
    $file = '404';
}