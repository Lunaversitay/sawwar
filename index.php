<?php require_once('inc/battleload.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Lunaversity">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Battle Load</title>

  <?php require_once('assets/css/css.php'); ?>
</head>
<body>

<div style="padding-top: 2%;padding-left: 3%">

<span style="font-size:64px;padding-top: 10px;font-family: Rodus;background: rgba(15,15,15,.9);text-transform: uppercase;text-shadow:0 0 15px #fff;"> <?php echo $community_name; ?> </span>
<br>
<span style="font-size: 50px;background:rgba(233,145,20,1);font-family: Rodus;color: #000;padding-top:5px;font-weight: 300;text-shadow: 0 0 10px #000;text-transform: uppercase;"> <?php echo $map_name; ?> </span>

<span style="font-family: Rodus;font-weight: 300;position: absolute;font-size: 30px;right: 150px;text-shadow: 0px 0px 100px #fff;"> LOADING </span>

<img src='<?php echo $data["avatarfull"];?>' style="position:absolute;bottom:0px;left: 15px;border: 2.5px solid rgb(233,145,20);">

<span style="font-weight: 300;position: absolute;bottom: 96px;left: 215px;font-size: 24px;text-transform: uppercase;font-weight: 800;"><?php echo $data["personaname"]; ?></span>
<span style="font-weight: 300;position: absolute;bottom: 60px;left: 215px;font-size: 24px;text-transform: uppercase;color: rgb(233,145,20);"><?php echo $data["steamid"]; ?></span>

  <script src="assets/js/jquery.min.js"></script>
  <?php require_once('assets/js/javascript.php'); ?>
</body>
</html>
