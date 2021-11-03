<?php

$timestamp = time();
//microtime();

$timestamp += 2*60*60;
$date = date("Y-m-d H:i:s", $timestamp);

//$dt = new DateTime();
//$dt->sub();
//
var_dump($date);
