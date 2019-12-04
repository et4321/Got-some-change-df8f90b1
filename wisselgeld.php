<?php

$geld = intval($argv[1]);

if ($geld){
    echo "$geld x 1 euro";
}

else{
    echo"Werkt niet";
    exit;
}