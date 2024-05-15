<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva" />
    <meta name="description" content="create your free account on Mivtzoim App" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    
   
  </head>
  
  
  <body style="text-align:center;"> 
    <?php include "header.php"
    ?>

    <div class='content'>
      <div class='login'>
      <H1>Log in</H1>
      <form action="/login.php" method="Post" >

        <input type="text" name="username" class='field' placeholder="username">
        <br>
        <hr>

        <input type="password"  name="password" class='field' placeholder="password">
        <br>
        <hr>
        <input type='submit' value='Log in' class='button'></button>
        
      </form>
      <button class=button onclick="window.location.href='signup.php'">Sign up</button>
    </div>
      
    <?php
    if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $status=userdata($username)['status'];
      if(login($username,$password)){$valid=True;}else{echo "<p style='color:red;'>Incorrect password!<p>";}
      if($status=='unv'){$valid=False; echo "<p style='color:red;'>This account has not been validated!<p>";}

      if($valid){
        session_start();
        $id=userdata($username)['id'];
        $_SESSION["user"] = $id;
        lastseen($id);
        header('Location: dashboard.php');
      }
      }
    
    ?>
    </div>


</body >


</HTML>


