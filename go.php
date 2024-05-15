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
  </head>

  
  <body>  
    <?php include "header.php";$user=signedin();?>
    <div class='content'>
      <button class='button'>New</button>
      <p>continue</p>
      <div class='menu'>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fshluchim.org/shluchimnet/opportunities/mivtzoim/tefillin/teffilin.pdf'">
            <p style='margin:auto'>...</p>
        </div>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fdvarmalchus.org/'">
            <p style='margin:auto'>...</p>
        </div>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fwww.shnayim.com/'">
            <p style='margin:auto'>...</p>
        </div>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fchabad.org/jewish-centers/'">
            <p style='margin:auto'>...</p>
        </div>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fchabad.org/calendar/zmanim_cdo/locationId/84/locationType/1/jewish/Halachic-Times.htm'">
            <p style='margin:auto'>...</p>
        </div>
        <div class='menubutton' onclick="window.location.href='viewer.php?adress=https%3A%2F%2Fviews.streamvu.com/player/?d9260ac2-a379-418d-9140-4ee8b81d0c6a'">
            <p style='margin:auto'>...</p>
        </div>
    </div>

    </div>
</body >
</HTML>


