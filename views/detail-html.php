<?php

return "

    <style>
    body {
      background-color:$werk->kleur;
    }
    </style>
    <script>
    $klr = '';
    if ($werk->kleur = 'white') {
      document.body.style.color = 'black';
      document.getElementById('h1').style.color = document.body.style.color;
    } else {
      document.body.style.color = 'white';
      document.getElementById('h1').style.color = document.body.style.color;
    };

    if ($werk->kleur = 'blue') {
      $klr = 'blauw';
    };

    </script>
    <div class='detailcon'>
    <img class='imgdetail' src= img/$werk->foto alt=$werk->naam>
    <div class='coverinfo'>
    <h2>$werk->naam</h2>
    <h2>$werk->artiest</h2>
    <h4>$werk->land</h4>
    <h4>$werk->jaar</h4>
    <h4>$werk->genre</h4>
    </div>
    </div>
    <div class='buttons'>
    <a class='button' href='index.php?pagina=$klr'>overzicht</a>
    <a class='button' href='index.php?pagina=verwijderen&id=$werk->id'>verwijderen</a>
    </div>
";
