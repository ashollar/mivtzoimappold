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
    <?php include "header.php";?>  
    <div class='content'>
        <form action="resendverification.php" method="Post">
            <input type="email" name="email" class='field' placeholder="email" ><br>
            <input type="submit" class='button' >
        </form>
        <?php
            if(isset($_POST['email'])){
                $email=$_POST['email'];
                echo '<p>resending verification email to '.$email."</p><br>
                <p>If you still do not receive the verification link, please contact customer support.<p>
                ";
                $hash=userdata($email)['hash'];
                $link='http://mivtzoim.app/accountverification.php?email='.urlencode($email)."&hash=".$hash;
                $from = "system@mivtzoim.app";
                $subject = "Verify your new Mivtzoim App account";
                $message = "Welcome to Mivtzoim App ".$username."!\nPlease click this link to activate your account:\n".$link."\nAfter completing this step, you will be able to log into your account.";
                $headers = "From:" . $from;
                mail($email,$subject,$message, $headers);
            }
        ?>


    </div>
</body >
</HTML>


