<?php
$out = "<div class='colorboxes'><a href='index.php?pagina=wit'><div class='colorbox white'></div></a><a href='index.php?pagina=rood'><div class='colorbox red'></div></a><a href='index.php?pagina=groen'><div class='colorbox green'></div></a><a href='index.php?pagina=blauw'><div class='colorbox blue'></div></a><a href='index.php?pagina=oranje'><div class='colorbox orange'></div></a><a href='index.php?pagina=bruin'><div class='colorbox brown'></div></a><a href='index.php?pagina=roze'><div class='colorbox pink'></div></a><a href='index.php?pagina=paars'><div class='colorbox purple'></div></a><a href='index.php?pagina=geel'><div class='colorbox yellow'></div></a><a href='index.php?pagina=grijs'><div class='colorbox grey'></div></a><a href='index.php?pagina=zwart'><div class='colorbox black'></div></a></div>";
$out .= "<h2></h2>";
while ( $werk = $covers->fetchObject() ) {
      $out .= "<div class='detail'><a href='index.php?pagina=detail&id=$werk->id'>";
      $out .= "<div class='afb'><img src='img/$werk->foto' alt='$werk->naam'></div>";
      $out .= "</a></div>";
}
$out .= "<div style='clear:both;'></div>";
return $out;
