<?php
session_start();
include_once("includes/functions.php");
Index()

?>
<doctype html>
    <html>
        <head>
            <title>catalog</title>
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="css/navstyle.css" type="text/css">
        </head>
        <body>
            <?php
              require_once("includes/nav.php");
             
              isForm();
              if(isset($_POST["submit"])){
                echo '<br>';
                echo $phase;
              }
             
            ?>

        </body>
        </html>