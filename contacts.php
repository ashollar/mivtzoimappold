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
            grid-template-rows:80vh auto;
        }
        .collapsebutton{

            grid-template-columns: 1fr auto;
            
        }
    
        .panel{
            display:block;
            height:100%;
            
        }
    </style>
    </head>

  
  <body>  
    <?php include "header.php";$user=signedin();?>  
    <div class='content'>
    


        <div class='panel'>
        <?php
        $contacts=getusercontacts($user, 'contacts');
        foreach ($contacts as $contact){

            $name=$contact['name'];
            $lastname=$contact['lastname'];
            $jew=$contact['jewstatus'];
            $jewname=$contact['jewname'];
            $gender=$contact['gender'];
            $number=$contact['number'];
            $email=$contact['email'];
            $mood=$contact['mood'];
            $age=$contact['age'];
            if(empty($mood)){$mood='128512';}
            $mood="&#$mood;";


            if($jew='j'){$jemoji='&#10017;';}elseif($jew='g'){$jemoji='2721';}else{}
            if($age==0){$agetext='';}else{$agetext="$age year old ";}
            if(False){$mood='128512';}



                
        echo <<<END
        <div class='collapsible'>
            <button type="button" id="collapsebutton" class="collapsebutton" style='padding:10px;'>
                <div id='trigger' class='trigger'>
                    <p  style="margin:0px;"><span  id='expandicon' class='material-symbols-outlined'>expand_more</span><span style='font-size:30px;vertical-align:sub;'>$jemoji</span> $name $lastname</p>
                </div>
                <div class='messagebuttons' style ="font-size:30px;">
                    <span class='material-symbols-outlined' onClick="location.href='https://api.whatsapp.com/send?phone=$number'">chat_bubble</span>
                    <span class='material-symbols-outlined' onClick="location.href='tel:$number'">call</span>
                    <span class='material-symbols-outlined' onClick="location.href='sms:$number'">sms</span>
                    <span class='material-symbols-outlined' onClick="location.href='mailto:$email'">mail</span>
                    <span class='material-symbols-outlined'>share</span>
                   
                </div>
                
            </button>
            <div class="collapsedcontent" id='collapsedcontent'>
                <p><span style='font-size:30px;vertical-align:sub;'>$mood</span> $jewname $name $lastname</p>
                <p>$agetext$gender</p>
                <p>phone: $number</p>
                <p>E-mail: $email</p>
                
            </div>
        </div>
        END;
        }
        ?>
        

        
        <script type="text/javascript" src="collapse.js?v=<?php echo getversion();?>"></script>
        </div>
        <button id='addcontact' class='addbutton' style='justify-self:left;'>+</button>


        </div>
        <script type="text/javascript" src="newcontact.js?v=<?php echo getversion();?>"></script>

        <div class='popup' id='popup' style='display:none;'>
            <span class="material-symbols-outlined" style='font-size:42px;' id='close'>close</span>
            <form action="/contacts.php" method="Post" autocomplete="off" style='display:grid;'>
                <div class='newcategory'>
                    <input type='text' placeholder='name' class='newfield' name="name"></input><br>
                    <input type='text' placeholder='last name' class='newfield' name="lastname"></input>
                </div>
                <div class='newcategory'>
                    <input type='text' placeholder='phone number' class='newfield' name="number"></input>
                </div>
                <div class='newcategory'>
                    <input type='text' placeholder='adress number' class='newfield' name="adress"></input><br>
                    <input type='text' placeholder='street' class='newfield' name="street"></input><br>
                    <input type='text' placeholder='city' class='newfield' name="city"></input><br>
                    <input type='text' placeholder='state/province' class='newfield' name="state-province"></input><br>
                    <input type='text' placeholder='zip/postal code' class='newfield' name="zip-postal"></input><br>
                    <input type='text' placeholder='country' class='newfield' name="country"></input>
                </div>
                <div class='newcategory'>
                    <input type="radio" name="gender" value="male" checked> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                    <input type="radio" name="gender" value="unknown"> Unknown
                    
                </div>
                
                <button class="addsubmit">Add</button>

            </form>
        </div>
        
    <div>
    <?php

        $data=$_POST;
        $id=userdata($username)['id'];
        if(isset($_POST['gender'])){
            newcontact($data,$id);
        }
    
    ?>

</body>
</HTML>


