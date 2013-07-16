<?php session_start();

ob_start(); ?>

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
<?php ob_start();

        
        $mem1 = $_POST['mem1'];
        
        $reg1 = $_POST['reg1'];
        
        $email = $_POST['email'];
        $mobile = $_POST['mob'];
        $event = $_POST['event'];
        $image = $_SESSION['imgname'];
        
       $result2 = mysql_query("SELECT * FROM aftereffects", $connection);
    if(!$result2){
        die("Database query failed: " . mysql_error());
    }
    
    if(mysql_num_rows($result2)!=0)
    {
        while($row2 = mysql_fetch_array($result2))
        {
            
            if($reg1 == $row2['regno1'] ){
                header("Location: regerror.php");
                exit;
            }
           
        }
        
    } 
        
     
             $result = mysql_query("INSERT INTO aftereffects (member1, regno1, email, mobile, event, image) VALUES ('$mem1','$reg1','$email',$mobile,'$event','$image')", $connection);
             if(!$result){
        die("Database query failed: " . mysql_error());
    }
    
    
 header("Location: team.php");
 exit;


?>
<?php
mysql_close($connection);
session_destroy();
?>