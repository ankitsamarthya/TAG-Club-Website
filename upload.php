<?php session_start();
    
    $folder = 'uploads/';
    
    
    $filename = strtotime("now").'.jpg';
    $_SESSION['imgname'] = "http://taggaming.co.cc/".$folder.$filename;
    $input_con = file_get_contents("php://input");
    $file_path = $folder.$filename;
    
    file_put_contents($file_path,$input_con);
    
    


?>