<?php
include_once("includes/functions.php");
CreateAcc();


?>
<doctype html>
    <html>
        <head>
            <title>catalog</title>
            <script defer src="js/script2.js"></script>
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link rel="stylesheet" href="css/navstyle.css" type="text/css">
        </head>
        <body>
           <?php require_once("includes/nav.php");  ?>
            <h2>Create account</h2>
           
            <form method="post">
              <div class="box">
                <input onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" type="text" id = "username" name="username" placeholder="User name" value = <?php echo $un; ?>>
                <?php echo '<div>'.$userer.'</div>'; ?>
                <input onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" type="password" id = "password" name="password" placeholder="Passwords" value = <?php echo $pw; ?>>
                <div id="numer" ></div>
                <div id="cher"></div>
                <input  onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" type="password"  id = "confirmps" name="confirmps" placeholder="Confirm passwords" value = <?php echo $cpw; ?>>
                <div id="ciner"></div>
                
                <br>
                <input id="main-button" type="submit" name="submit" value="Create account" disabled>
                <br>
                <input type="submit" value="Reset" name="reset">
            </div>
          </form>
        </body>
        </html>