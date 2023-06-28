<?php
session_start();
include_once("includes/functions.php");


showCart();
showOrderList();

/*echo '<pre>';
var_dump($_SESSION['finalqty']);
echo '</pre>';
*/
?>
<doctype html>
    <html>
        <head>
            <title>catalog</title>
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link rel="stylesheet" href="css/navstyle.css" type="text/css">
        </head>
        <body>
            <?php
              require_once("includes/nav.php");
             if(!isset($_POST['result'])){
             echo $finaltable;
             }
             echo $result;
            
            
               
            
             ?>
             
        </body>
        </html>