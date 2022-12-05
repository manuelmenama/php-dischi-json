<?php

$string = file_get_contents('dischi.json');

$discs = json_decode($string, true);


//logica


header('Content-Type: application/json');
echo json_encode($discs);