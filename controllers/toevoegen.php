<?php

// we checken hier of de form is "gesubmit" en of er data is meegestuurd
$dataOpgestuurd = isset( $_POST['toevoegen'] );

// indien ja, dan stoppen we data in de databank en laden we de afbeelding op
if ( $dataOpgestuurd) {
    invoerenDatabank($db); // functie waarin we de data opslaan in de databank
    $output = afbeeldingOpladen(); // functie waarin we de afbeelding opladen naar de img folder
    // met onderstaande regels keren we na het opslaan terug naar de overzichtspagina
		header('Location: index.php');
    exit;

// indien niet, dan tonen we de form
} else {
    $output = include_once "views/toevoegen-html.php";
    $output .= include_once "views/kleuren/wit.php";
}

return $output;

function invoerenDatabank($db){
    include_once"models/Covers.class.php";
    $covers = new Cover_Table($db);
    $inputtitel =$_POST['titel'];
    $inputName =$_POST['titel'] .".jpg";
    $imageName =str_ireplace(' ','-',$inputName);
    $artiest = $_POST['artiest'];
    $genre = $_POST['genre'];
    $land = $_POST['land'];
    $kleur = $_POST['kleur'];
    $jaar = $_POST['jaar'];
    $covers->saveCover($inputtitel,$artiest,$imageName, $genre, $land, $jaar, $kleur);
}

function afbeeldingOpladen(){
    $inputName =$_POST['titel'] .".jpg";
    $imageName =str_ireplace(' ','-',$inputName);
    include_once "models/Oplader.class.php";
    $oplader = new Oplader( "image-data" );
    $oplader->saveIn("img");
    $fileUploaded = $oplader->save($imageName);
    if ($fileUploaded) {
        $out = "nieuw bestand opgeladen naam is $imageName";
    } else {
        $out = "er is iets foutgelopen";
    }
}
