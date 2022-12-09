<?php

$string = file_get_contents('dischi.json');

$discs = json_decode($string, true);

$filtered = [];

if(!empty($_POST['postedAlbumTitle'])){
  $new_album = [
    "title" => $_POST['postedAlbumTitle'],
    "author" => $_POST['postedAlbumAuthor'],
    "year" => $_POST['postedAlbumYear'],
    "poster" => $_POST['postedAlbumPoster'],
    "genre" => $_POST['postedAlbumGenre']
  ];
  $discs[] = $new_album;

  file_put_contents('dischi.json', json_encode($discs));
}
if(isset($_POST['postGenre'])){
  foreach($discs as $album){

    if($album["genre"]===$_POST['postGenre']){
      $filtered[] = $album;
    }elseif($_POST['postGenre']===""){
      $filtered = $discs;
    }
  }
}else{
  $filtered = $discs;
}




header('Content-Type: application/json');
echo json_encode($filtered);
