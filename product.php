<?php
  session_start();
  include_once("includes/functions.php");
  AddingCart();

?>
<doctype html>
    <html>
        <head>
            <title>catalog</title>
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link rel="stylesheet" href="css/navstyle.css" type="text/css">
        </head>
        <body>
          <?php require_once("includes/nav.php"); ?>
         <table  class="styled-table">
           <tr>
            <td>Image</td><td><img width= "300" height = "300" src="img/product-images/<?php echo $img ?>"></td>
          </tr>
          <tr>
          <td>Name</td><td><?php echo $name; ?></td>
         </tr>
         <tr>
         <td>Description</td><td><?php echo $description; ?></td>
        </tr>
        <tr>
        <td>Price</td><td> $ <?php echo $price; ?></td>
        </tr>
        <tr>
        <td>Quantity</td>
        <td> 
        <form method="post">
          <input type="hidden" value ="<?php echo $pnum;?>">
          <input type="number" id="quantity" name="quantity" value="1" min="1" max="999">

          <input type="submit" name = "add-to-cart" value="Add to Cart">
          <?php echo $respond; ?>
       </form>

        </td>
        </tr>
        </table>
       </body>
</html>