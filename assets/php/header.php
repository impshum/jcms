<?php
require 'cms/user_config.php';
require 'assets/php/core_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?></title>
    <meta name="description" content="<?php echo $sitedescription; ?>">
    <meta name="keywords" content="<?php echo $sitekeywords; ?>">
    <meta name="theme-color" content="#000000">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/png" href="cms/images/<?php echo $sitefavicon; ?>">

<!-- TODO
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
-->

</head>
<body>
  <script>document.body.className += 'fade-out';</script>
  <div class="half" style="background: url(cms/images/<?php echo $siteimage; ?>); background-size: cover;">
      <div class="notcenter">
          <a href="index.php"><h1 class="ani fadeInUp"><?php echo $siteheader; ?></h1></a>
          <h5 class="ani fadeIn d1" id="pagetitle1"></h5>
      </div>
  </div>
  <div class="wrapper">
      <div class="container main">
          <div class="title centered">

              <a class="button menu-btn hoverme" onclick="openNav()" data-aos="zoom-in" data-aos-once="true"><span>MENU</span></a>
          </div>
          <div class="row bott mainly" data-aos="zoom-out" data-aos-once="true">
