<?php

include('config.php');

$steamid = $_GET["steamid"];
if(!isset($_GET["steamid"])){
  $steamid = "76561198074425791" ;
};


$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$SteamAPIKey."&steamids=".$steamid;
$json = file_get_contents($url);
$getdata = json_decode($json, true);
$data = $getdata["response"]["players"][0];


?>
