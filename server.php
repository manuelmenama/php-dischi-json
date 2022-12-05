<?php

$string = file_get_contents('dischi.json');

$discs = json_decode($string);

var_dump($discs);