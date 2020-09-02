<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table($db);
$werk= $cover->geefCover($_GET['id']);
$output = include_once "views/detail-html.php";
return $output;
