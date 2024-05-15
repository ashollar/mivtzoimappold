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
            align-items:center;
        }
        .collapsebutton{
            grid-template-columns:1fr 1fr 1fr;
        }

    </style>
    </head>

  
  <body>  
    <?php include "header.php";$user=signedin();?>  
    <div class='content'>
    


    <div class='databrowser'>
        <?php
        $messages=getusertable($user, 'inbox');
        foreach ($messages as $message_data){

            $sender=$message_data['sender'];
            $date=$message_data['senddate'];
            $time=$message_data['sendtime'];
            $message=$message_data['message'];
            $subject=$message_data['subject'];
        echo <<<END
        <div class='collapsible'>
            <button type="button" class="collapsebutton" id="collapsebutton">
                <div class='trigger'>
                    <p  style="margin:0px;"><span  id='expandicon' class='material-symbols-outlined'>expand_more</span>Message from $sender</p>
                </div>
                <div class='trigger' style='height:100%;text-align:center;grid-column: 2;font-weight: bold;'>
                    $subject
                </div>
                <div class='messagebuttons'>
                    <span  class='material-symbols-outlined' onClick="location.href='compose.php'">mail</span>
                    <span  class='material-symbols-outlined' >delete</span>
                </div>
                
            </button>
            <div class="collapsedcontent" id="collapsedcontent">
                <p>$date   <span style='font-weight:bold;'>$time</span></p>
                <p>$message</p>
            </div>
        </div>
        END;
        }
        ?>
        

        
        <script type="text/javascript" src="collapse.js?v=<?php echo getversion();?>"></script>
    </div>


    </div>
</body >
</HTML>


