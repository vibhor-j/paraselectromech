<?php session_start();?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel='shortcut icon' type='image/x-icon' href='../img/favicon.ico' />
      <title>Paras Electromech</title>
      <?php require_once('includes.php'); ?>
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <?php require_once('header.php'); ?>
      <section>
         <!-- CAROUSEL --> 
         <?php require_once('carousel.php'); ?>
         <?php require_once('about-us.php'); ?>
         <?php require_once('services.php'); ?>
         <?php require_once('employment.php'); ?>
         <?php require_once('clients.php'); ?>
         <?php require_once('contact-us.php'); ?>
         
       <!-- FOOTER -->
     <?php require_once('footer.php'); ?>

     </section>
   </body>
</html>
