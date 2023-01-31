<?php
$file_json = __DIR__.'\channels.json';

$channelsJSON = file_get_contents($file_json);
//var_dump($channelsJSON);
//print_r($channelsJSON);

$channelsPHP = json_decode($channelsJSON, true);

//print_r($channelsPHP);