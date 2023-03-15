<?php session_start();?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel='shortcut icon' type='image/x-icon' href='./img/favicon.ico' />
      <title>Paras Electromech</title>
      <?php require_once('./pages/includes.php'); ?>
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <?php require_once('./pages/header.php'); ?>
      <section>
         <?php require_once('./pages/carousel.php'); ?>
         <?php require_once('./pages/about-us.php'); ?>
         <?php require_once('./pages/services.php'); ?>
         <?php require_once('./pages/employment.php'); ?>
         <?php require_once('./pages/clients.php'); ?>
         <?php require_once('./pages/contact-us.php'); ?>
         <?php require_once('./pages/footer.php'); ?>
      </section>
   </body>
</html>
