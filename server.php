<?php

$string = file_get_contents('dischi.json');

$discs = json_decode($string, true);

$filtered = [];


if(isset($_POST['postGenre'])){
  foreach($discs as $album){

    if($album["genre"]===$_POST['postGenre']){
      $filtered[] = $album;
    }
  }
}else{
  $filtered = $discs;
}

header('Content-Type: application/json');
echo json_encode($filtered);
