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
$teamno = $_GET['tn'];
echo "<center><br/><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Are Successfully Registered. Your Team Number is <br/><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$teamno</h1> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindly Come with Your Team Number between 9:30am to 10:30am on 2nd Sept to confirm your registration.</h3></center>";

echo "<center><br/><br/><a href='index.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Continue</a></center>";


    ?>
    </body>
</html>