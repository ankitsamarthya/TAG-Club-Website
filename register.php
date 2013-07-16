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

        $team = $_POST['team'];
        $mem1 = $_POST['mem1'];
        $mem2 = $_POST['mem2'];
        $mem3 = $_POST['mem3'];
        $mem4 = $_POST['mem4'];
        $mem5 = $_POST['mem5'];
        $reg1 = $_POST['reg1'];
        $reg2 = $_POST['reg2'];
        $reg3 = $_POST['reg3'];
        $reg4 = $_POST['reg4'];
        $reg5 = $_POST['reg5'];
        $email = $_POST['email'];
        $mobile = $_POST['mob'];
        $event = $_POST['event'];
        $image = $_SESSION['imgname'];
        
       $result2 = mysql_query("SELECT * FROM register", $connection);
    if(!$result2){
        die("Database query failed: " . mysql_error());
    }
    
    if(mysql_num_rows($result2)!=0)
    {
        while($row2 = mysql_fetch_array($result2))
        {
            if($team == $row2['team']){
                header("Location: error.php");
                exit;
            }
            if($reg1 == $row2['regno1'] || $reg1 == $row2['regno2'] || $reg1 == $row2['regno3'] || $reg1 == $row2['regno4'] || $reg1 == $row2['regno5']){
                header("Location: regerror.php");
                exit;
            }
            if($reg2 == $row2['regno1'] || $reg2 == $row2['regno2'] || $reg2 == $row2['regno3'] || $reg2 == $row2['regno4'] || $reg2 == $row2['regno5']){
                header("Location: regerror.php");
                exit;
            }
            if($reg3 == $row2['regno1'] || $reg3 == $row2['regno2'] || $reg3 == $row2['regno3'] || $reg3 == $row2['regno4'] || $reg3 == $row2['regno5']){
                header("Location: regerror.php");
                exit;
            }
            if($reg4 == $row2['regno1'] || $reg4 == $row2['regno2'] || $reg4 == $row2['regno3'] || $reg4 == $row2['regno4'] || $reg4 == $row2['regno5']){
                header("Location: regerror.php");
                exit;
            }
            if($reg5 == $row2['regno1'] || $reg5 == $row2['regno2'] || $reg5 == $row2['regno3'] || $reg5 == $row2['regno4'] || $reg5 == $row2['regno5']){
                header("Location: regerror.php");
                exit;
            }
        }
        
    } 
        
     
             $result = mysql_query("INSERT INTO register (team, member1, regno1, member2, regno2, member3, regno3, member4, regno4, member5, regno5, email, mobile, event, image) VALUES ('$team','$mem1','$reg1','$mem2','$reg2','$mem3','$reg3','$mem4','$reg4','$mem5','$reg5','$email',$mobile,'$event','$image')", $connection);
             if(!$result){
        die("Database query failed: " . mysql_error());
    }
    
    $result1 = mysql_query("SELECT * FROM register WHERE team='$team'", $connection);
    if(!$result1){
        die("Database query failed: " . mysql_error());
    }
    
    if(mysql_num_rows($result1)!=0)
    {
        $row = mysql_fetch_array($result1);
        
        $tn = $row['id'];
        
    }
 header("Location: team.php?tn=$tn");
 exit;


?>
<?php
mysql_close($connection);
session_destroy();
?>