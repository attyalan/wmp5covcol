<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefGrijs();
$output = include_once "views/kleuren/grijs.php";
$output .= include_once "views/overzicht-html.php";
return $output;
