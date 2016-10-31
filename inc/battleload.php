<?php

include('config.php');

if(!isset($_GET['steamid']){
  $s64 = '76561198074425791';
} else {
  $s64 = $_GET['steamid'];
}
   
$type = (substr($s64, -1) & 1) ? 1 : 0;
$steamid = sprintf("STEAM_0:%d:%d", $type, (bcsub($s64, "76561197960265728") - $type) / 2);

$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$SteamAPIKey."&steamids=".$s64;
$json = file_get_contents($url);
$getdata = json_decode($json, true);
$data = $getdata["response"]["players"][0];


?>
