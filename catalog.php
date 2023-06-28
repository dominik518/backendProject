<?php
  include_once("includes/functions.php");
  showCatalog();
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
            $p = 1;
              require_once("includes/nav.php");
           
             echo $table;
             ?>
         
        </body>
        </html>