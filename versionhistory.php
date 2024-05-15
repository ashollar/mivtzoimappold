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
     .panel{
            display:inline-block;
            text-align:left;
            padding:10px;
            overflow:auto;
        }
        
  </style>  
  </head>

  
  <body>  
    <?php include "header.php";?>  
    <div class='content'>
        <div class='panel'>
            
        
        <?php
        $history=gettable('site_data','version_updates');
        foreach ($history as $update){
          $additions=explode(",", $update['information']);
          echo "<H2>".$update['id']."  <span style='font-size:small;'>".$update['date']."</span></H2>";
          foreach($additions as $line){
            echo "<P>•".$line."</p>";
          }
          
          
        }
        ?>
        </div>


    </div>
</body >
</HTML>


