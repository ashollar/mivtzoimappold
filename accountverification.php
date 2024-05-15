<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>
    <meta http-equiv="refresh" content="5;url=https://mivtzoim.app/login.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva" />
    <meta name="description" content="stay organized with your mivtzoim free, with mivtzoim app!" />    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
  </head>
  
  
  <body style="text-align:center;">
    <?php include "header.php";?>

    <div class='content'>
      <TITLE>Verification</TITLE>
      <h4>BS"D</H4>
      <H1>Mivtzoim App <span style="color:lightblue;">Beta</span></H1>
      <H3>All your mivtzoim. All in one place.</H3>   
    
    <?php
    
      $verification=False;
      $email=$_GET['email'];
      #echo " verification for ".$email;
      $storedhash=userdata($email)['hash'];
      $status=userdata($email)['status'];
      if ($storedhash == $_GET['hash']){$verification=True;}
      if($status !='unv'){$verification=FALSE;echo"<p style='color:red;'>Account already verified!</p>";}



    
    
      
    if ($verification){
      $database = "user_data";
      $conn = mysqlconnect($database);
      $sql = "UPDATE users SET status='user' WHERE email ='$email'";
      if (!$conn->query($sql) === TRUE){echo "Error: " . $sql . "<br>" . $conn->error;}
      
      $conn->close();
      newuserdatabase($email);
      newusertables($email);
      systemmessage($email,"Welcome!","Welcome to mivtzoim app! Your account is set up and ready to go!");
    echo "<p>Your account has been successfuly verified!<p>
    <p>proceeding to login...<p>";
    

    }
    ?>
    </div>
    
      
</body >


</HTML>


