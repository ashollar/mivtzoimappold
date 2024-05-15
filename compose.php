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
    <style>
        .panel{
            display:grid;
            grid-template-columns:1fr;
            grid-template-rows:fit-content(1000px) auto 1fr;
            overflow:hidden;
        }
        .inputfield, input:focus,textarea:focus, textarea:focus, select:focus{
            width:100%;
            margin:0px;
            border:0px;
            box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.3);
            background-color:rgba(255,255,255,0);
            font-size:24px;
            line-height:30px;
        }
    </style>

  
  <body>  
    <?php include "header.php";$user=signedin();?>  
    <div class='content'>
    



        <form class='panel' action="/compose.php" method="POST">
            <input type='text' name='to' class='inputfield' placeholder="message to..."></input>
            <input type='text' name='subject' class='inputfield' placeholder="message subject..."></input>
            <textarea type='text' name='message' class='inputfield' placeholder="type your message here..."></textarea>
            <?php
            if(isset($_POST['message'])){
                $userto=$_POST['to'];
                $usernamefrom=$username;
                $subject=$_POST['subject'];
                $message=$_POST['message'];
                $localtime=date("h:i:s A");
                $localdate=date("m-d-y");
                sendmessage($userto,$usernamefrom,$subject,$message,$localtime,$localdate);
                header("Location:inbox.php");
            }else{
                echo "<input type='submit' class='inputfield'></input>";
                
            }
            ?>
        </form>


    </div>
    
</body >
</HTML>
