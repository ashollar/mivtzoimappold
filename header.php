<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<div class='header' id='navbar'>
    <div class='title' onClick="location.href='versionhistory.php'" style='grid-column:1;'>
        <p>Mivtzoim App <span style="color:rgb(216, 237, 243); font-size:10px;"><?php echo "v".getversion();?></span></p>
    </div>
    
    <div class='usermenu' onClick="location.href='settings.php'" style='grid-column:2;height:100%;margin:0px;'>
        <span class="material-symbols-outlined" style='grid-column:1;'>person</span>
        <?php
            
            $username=issignedin();
            if($username != 'sign in'){$username=userdata($username)['username'];}
            echo "<p style='grid-column:2;'>$username</p>";
        ?>
        
        
    </div>
    <div class='navbuttons' style='grid-column:3;' >
    
        <span class="material-symbols-outlined" onClick="location.href='dashboard.php'" style='font-size:40px;'>home</span>
     </div>
</div>