<?php

include_once "models/Covers.class.php";

return "<!DOCTYPE html>
<html>
<head>
<title>$paginaData->titel</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
$paginaData->css
$paginaData->embeddedStyle
</head>

<body>
  <div class='kader'>
    <h1><a href='index.php' id='h1'>covcol</a></h1>
    $paginaData->content
  </div>
</body>
</html>";
?>
