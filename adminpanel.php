<!DOCTYPE html>
<HTML>
  <head>
    <TITLE>Mivtzoimapp</TITLE>
    <?php include "standardhead.php";?>
  </head>

  
  <body>  
    <?php include "header.php";$user=signedin();if(userdata($user)['status'] != 'dev' and userdata($user)['status'] != 'admin'){header("Location: index.php");}
    ?>  
    <div class='content'>

    </div>
</body >
</HTML>


