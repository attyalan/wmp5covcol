<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefRoze();
$output = include_once "views/kleuren/roze.php";
$output .= include_once "views/overzicht-html.php";
return $output;
