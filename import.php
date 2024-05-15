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
    .area{
            width:100%;
            margin:0px;
            border:0px;
            box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.3);
            background-color:rgba(255,255,255,0);
            font-size:24px;
            line-height:30px;
            overflow:auto;
        }  
        .panel{
            display:grid;
            grid-template-columns:1fr;
            grid-template-rows:auto fit-content(1000px);
            overflow:auto;
            justify-items:left;
            

        }
    </style>
</head>

  
  <body>  
    <?php include "header.php";$user=signedin();?>  
    <div class='content'>
    <form class='panel' method='POST' action='import.php'>
        <?php
        if(isset($_POST['data_block'])){
            $raw=$_POST['data_block'];
            $raw=str_replace('"', "", $raw);
            $raw=str_replace("'", "", $raw);
            
            $table=parsecsv($raw);
            

            $labels='name,lastname,jewname,jewstatus,gender,age,number,email,notes,country,state-province,city,zip-postal,street,adress,unit-apt';
            $labels=explode(",",$labels);
            $labelshtml='';
            foreach($labels as $label){$labelshtml.="<option value='".$label."'>\n";}
            #echo $labels
                $column_count=count($table['0']);
                

                echo "<p>your table contains ".count($table)." entries with".$column_count." columns. please select the appropriate description for each column.</p>";
                echo "\n<datalist id='labels'>\n".$labelshtml."</datalist>\n";

                for($x = 0; $x <= $column_count-1; $x++){

                    $values=$table['0'][$x];
                    echo "<input list='labels' name='column-$x'></input>\n<div>".$values."</div>";
                    


                }
            echo "<input type='submit'></input>";
            echo  "<input type='hidden' name='table_data' value='".addslashes($raw)."'>";





        }elseif(isset($_POST['column-0'])){
            $raw = $_POST['table_data'];
            $table=parsecsv($raw);
            
            $column_count=count($table['0']);
            $column_keys=[];
            for($x = 0; $x <= $column_count-1; $x++){
                array_push($column_keys,$_POST["column-".$x]);
            }
            

            foreach($table as $entry){
                $values=makeassoc($column_keys,$entry);
                #print_r($values);
                newcontact($values,$user);

            }
            echo"<H1>uploaded table!<H!>";
            
            

        }else{
            echo "<textarea type='text' name='data_block' class='area' placeholder='export spreadsheet as csv, then copy and paste to here...'></textarea>";
            echo "<input type='submit' class='area'></input>";
        }

        ?>
        </form>

    </div>
</body >
</HTML>


