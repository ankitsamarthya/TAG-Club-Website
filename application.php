<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />
    </head>
    <body>

<?php ob_start();

include 'server.php';
    $connection = mysql_connect("$HOST","$USER","$PASS");
    if(!$connection){
        die("Database connection failed: " . mysql_error());
    }
    
    $db_select = mysql_select_db("$DATABASE", $connection);
    if(!$db_select){
        die("Database selection failed: " . mysql_error());
    }
?>
<?php

if(isset($_POST['upload']))
{
    
    $dept = $_POST['dept'];
    $fname = $_FILES["file"]["name"];
    $fname1 = strtotime("now").$fname;
     $ftype = $_FILES["file"]["type"];
   
    $ftemp = $_FILES["file"]["tmp_name"];
    $ferror = $_FILES["file"]["error"];
  
  if($dept == "pr"){
    $flocation = "applications/pr/".$fname1;
  } else if($dept == "ot"){
    $flocation = "applications/ot/".$fname1;
  } else if($dept == "tt"){
    $flocation = "applications/tt/".$fname1;
  } else if($dept == "em"){
    $flocation = "applications/em/".$fname1;
  }
  
    
   
       
        move_uploaded_file($ftemp, $flocation);
         $fresult = mysql_query("INSERT INTO applications (fid, dept, fname) VALUES ('','$dept','$fname')", $connection);
    if(!$fresult){
        die("Database query failed: " . mysql_error());
    }
    else {
       
        echo "File Uploaded Successfully.";
        header('Refresh:5; url=index.php');
    }
    
        
}


mysql_close($connection);

?>
    </body>
</html>



