
<?php
require 'cms/user_config.php';
require 'assets/php/core_config.php';
# require 'assets/php/cogs.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $sitetitle; ?></title>
    <meta name="description" content="<?php echo $sitedescription; ?>">
    <meta name="keywords" content="<?php echo $sitekeywords; ?>">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/png" href="cms/images/<?php echo $sitefavicon; ?>">
</head>
<body>
  <script>document.body.className += ' fade-out';</script>
  <div class="full" style="background: url(cms/images/<?php echo $siteimage; ?>); background-size: cover;">
      <div class="center">
          <div class="ani fadeInUp"><h1><?php echo $siteheader; ?></h1></div>
          <div class="ani fadeIn d1"></h5><?php echo $sitesubheader; ?></h5></div>
      </div>
      <a href="#top">
        <div id="scroller" class="ani fadeIn d2">
            <a href="#top"><span></span></a>
        </div>
      </a>
  </div>
