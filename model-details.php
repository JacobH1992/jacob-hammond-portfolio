<?php

$urlVars  = explode('/', $q);
$detailsUrl = $urlVars[1];

require_once('php/getData.php');
$hasDetails = getDetails($detailsUrl);

if($hasDetails) {
    $file = 'details';
} else {
    $file = '404';
}