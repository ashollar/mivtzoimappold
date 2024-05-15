<!DOCTYPE html>
<HTML>
  <head>
    <TITLE>Mivtzoimapp</TITLE>
    <?php include "standardhead.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva" />
    <meta name="description" content="stay organized with your mivtzoim free, with mivtzoim app!" />    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
      .content{
        display:grid;
        justify-items:center;
        
        /*grid-template-columns: auto auto;
        grid-template-rows: auto auto auto;*/

      }
      .panel{
        height:40%;

      }
 
    </style>
  
  </head>


  <body>    
    <?php include 'header.php';$user=signedin();?>
    <div class='content'>
      <div class='panel'>
      <script src="https://www.hebcal.com/etc/hdate-he.js">
      </script>
        <p><?php echo date("l   F jS\, Y h:i A");?></p>

      </div>
    <div class='apps'>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='settings.php'"></button>
        <p class='app_title'>My account</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='contacts.php'"></button>
        <p class='app_title'>contacts</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='inbox.php'"></button>
        <p class='app_title'>messaging</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='import.php'"></button>
        <p class='app_title'>import spreadsheet</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='recources.php'"></button>
        <p class='app_title'>recources</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='go.php'"></button>
        <p class='app_title'>Go</p>
      </div>
     
      </div>

      
</body >
</HTML>


