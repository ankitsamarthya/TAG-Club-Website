<?php ob_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />
    </head>
    <body>
       <?php
       echo "<center><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of the registration number already registered. Try with different Registration Number. Redirecting in 5 seconds.</center>";
       header('Refresh:5; url=index.php');
       $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
       echo "<center><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='$url'>Go Back</a></center>";

       exit;
    ?>
    </body>
</html>