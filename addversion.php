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
            display:inline-block;
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
    <?php include "header.php";?>  
    <div class='content'>
    



        <form class='panel' action="/addversion.php" method="POST">
            <input type='text' name='version' class='inputfield' placeholder="version number"></input>
            <textarea type='text' name='notes' class='inputfield' placeholder="notes..."></textarea>
            <?php
            if(isset($_POST['notes'])){
                $version=$_POST['version'];
                $notes=$_POST['notes'];
                $date=date("m-d-Y");
                $conn=mysqlconnect('site_data');
                $sql="INSERT INTO `version_updates` (`id`, `date`, `information`) VALUES ('$version', '$date', '$notes');";
                $conn->query($sql);

            }else{
                echo "<input type='submit' class='inputfield'></input>";
                
            }
            ?>
        </form>


    </div>
    
</body >
</HTML>
