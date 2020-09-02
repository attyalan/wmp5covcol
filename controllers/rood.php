<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefRood();
$output = include_once "views/kleuren/rood.php";
$output .= include_once "views/overzicht-html.php";
return $output;
