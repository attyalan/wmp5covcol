<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefGeel();
$output = include_once "views/kleuren/geel.php";
$output .= include_once "views/overzicht-html.php";
return $output;
