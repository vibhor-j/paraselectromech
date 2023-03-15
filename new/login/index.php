<?php session_start();?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel='shortcut icon' type='image/x-icon' href='../img/favicon.ico' />
      <title>Login</title>
      <?php require_once('../pages/includes.php'); ?>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <?php require_once('../pages/header.php'); ?>
      <section>
         &nbsp;
         <div id="login">
            <div class="line">
               <h2 class="section-title">Login</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-5" style="width:100%">
                     <h3>Enter your login details below</h3>
                     <form class="customform" action="authenticate.php" method="post">
                        <div class="s-12"><input id="email" name="email" placeholder="E-mail" title="E-mail" type="text" /></div>
                        <div class="s-12"><input id="password" name="password" placeholder="Password" title="Password" type="password" /></div>
                        <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- FOOTER -->
         <?php require_once('../pages/footer.php'); ?>
      </section>
   </body>
</html>
