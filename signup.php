<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva" />
    <meta name="description" content="create your free account on Mivtzoim App" />

  </head>
  
  
  <body style="text-align:center;"> 
      <TITLE>Sign up</TITLE>
      <div class='content'>
        
    <div class='login' style='display:inline;'>
    <H1>Create a new account</H1>
    <form action="/signup.php" method="Post" autocomplete="off">
      <input type="email" name="email" class='field' placeholder='email adress'>
      <br>
      <hr>
      <input type="text" name="username" class='field' placeholder='username'>
      <br>
      <hr>
      <input type="password"  name="password" class='field' placeholder='password'>
      <br>
      <hr>
      <input type="password"  name="repassword" class='field' placeholder='repeat password'>
      <br>
      <hr>
      <label for="pp">I have read and agree to the <a href='privacypolicy.php'>privacy policy.</a></label>
      <input type="checkbox"  name="pp" value='agreed' class='field'>
      <br>
      <input type='submit' value='sign up' class='button'></button>
      <p>Already have an account?</p>
      <a href="login.php">Log in</a>
    </form>
</div>
    
    <?php


    if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
      $valid=TRUE;
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $repassword = $_POST['repassword'];
      $pp = $_POST['pp'];

      #echo $username ;
      #echo $email ;
      #echo $password ;
      #echo $repassword;
      #echo $pp ;
      
      if($password != $repassword){echo "<p style='color:red;'>passwords do not match!<p>"; $valid = False;}
      if($pp != 'agreed'){echo "<p style='color:red;'>You must agree to the privacy policy to make an account!<p>"; $valid = False;}
      if(!(unique($email,'email'))){echo "<p style='color:red;'>This email is already registered with an account!<p>"; $valid = False;}
      if(!(unique($username,'username'))){echo "<p style='color:red;'>This username is already in use!<p>"; $valid = False;}
      



      if ($valid){
        #data needed for the new account
        $date=date("Y/m/d");
        $hash = md5( rand(0,1000) );

        #creating connection to the database
        $database = "user_data";
        $conn = mysqlconnect($database);
        #add the new account to the database
        $password=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username,password,email,datecreated,hash,status,lastseen)VALUES(
          '$username','$password','$email','$date','$hash','unv',''
        )";
        echo $sql;
        $conn->query($sql);
        $conn->close();
        
        #give feedback to the user

        echo "<H2>welcome to Mivtzoim App ".$username."! <H2>";
        echo "<p>We successfully created your new account!</p>";
        echo "<p>Please verify your account by clicking the link sent to the inbox of ".$email."</p>";
        echo "<p>If you do not receive the email within a few minutes, please follow <span onClick=\"location.href='resendverification.php'\">This link</span></p>";

        #send verification email
        $link='http://mivtzoim.app/accountverification.php?email='.urlencode($email)."&hash=".$hash;
        $from = "MivtzoimApp@mivtzoim.app";
        $subject = "Verify your new Mivtzoim App account";
        $message = "Welcome to Mivtzoim App ".$username."!\nPlease click this link to activate your account:\n".$link."\nAfter completing this step, you will be able to log into your account.";
        $headers = "From:" . $from;
        mail($email,$subject,$message, $headers);
        #for testing print url to signup page
        #echo "<a>$link</a>";
      }
    }
    ?>
    </div>


</body >


</HTML>


