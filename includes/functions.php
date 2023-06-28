<?php
function passHash($data){
    $extrap1 = 'fakshdfhj2b4j234jbjhaufh3423b4k23bjknwjkdfhisajnkjsgfsgshsehsh';
    $extrap2 = 'kfjsfksdjknkjkjn4k2j3n4k23423423xfjdsbfb53764gdfgsgfsgfdsgsg';
    return  $extrap1.hash('sha256', $data).$extrap2;
}

function UnPwCpwStay(){
    if(isset($_POST["submit"])){
        global $un;
        global $pw;
        global $cpw;
        $un = $_POST["username"];
        $pw = $_POST["password"];
        $cpw = $_POST["confirmps"];
    }
    else if(isset($_POST["reset"])){
        $un = "";
        $pw = "";
        $cpw = "";
    }
    else{
        $un = "";
        $pw = "";
        $cpw = "";
    }
    }

    function isGranted(){
        if(isset($_SESSION['granted'])) return true;
        else return false;
    }

    function isForm(){
        global $phase;
        if(isGranted()){
            $phase = '<div class="granted"> Log in success</div>';
          echo '<div class = "granted">welcome to our store</div>';
        }
        else{
            $phase = '<div class="alert"> <strong>Log in failed </strong> either your user name or your password is wrong</div>';
          echo '
          <h1>Login</h1>
         
          <form method="post" class="login" >
          <div class="box">
          <input onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" type="text" name="username" placeholder="User name">
          <br>
          <input onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" type="password" name="password" placeholder="Passwords">
          <br>
          <input type="submit" class="btn" name="submit" value="Log in">
          
          <input type="reset" id="btn2" value="Reset">
          <a href="create-account.php">Create an account</a>
          <div>
      </form>
      ';
        }
       }


       function WhichMoreThanOne($data, $num){
   
        for($i = (count($data)-1); $i >=0 ; $i--){
            if($data[$i] == ''.$num.''){
               return $i;
            }
        }
    }




function showCart(){
    global $finaltable;
    if(isset($_SESSION['product-id'])){
    

    
    $product_id = $_SESSION['product-id'];
    $qty = $_SESSION['qty'];
    $price = $_SESSION['price'];
    $prod_name = $_SESSION['prod-name'];
    

    
    
    
    
    if(isset($_POST['update'])){
        for($z = 0; $z <20; $z++){
            if($_SESSION['finalqty'][$z] != $_POST['qty'.$z.'']){
                $_SESSION['finalqty'][$z] = $_POST['qty'.$z.''];
                
            }

        }
    }
    
    
    $grandtotal = 0;
    
    for($i = 0; $i< 20; $i++){
        
        if($_SESSION['finalqty'][$i] >= 1 ){
            $table .= '
            <tr>  
        <td> <img height="100" width="100" src ="img/product-images/'.($i+1).'.jpg"> </td>
         <td> '.$prod_name[WhichMoreThanOne($product_id, $i+1)].'</td> 
         <td> '.$price[WhichMoreThanOne($product_id, $i+1)].'</td> 
         <td> <input type"text" name = "qty'.$i.'" value = "'.$_SESSION['finalqty'][$i].'"> </td>
         <td> '. $_SESSION['finalqty'][$i] * $price[WhichMoreThanOne($product_id, $i+1)] .' </td>
         </tr>
    
            ';
            $grandtotal +=  $_SESSION['finalqty'][$i] * $price[WhichMoreThanOne($product_id, $i+1)];
        }
    }
    $to =  '   <form method ="post">  <table class="styled-table"><thead><tr> <th> Image </th> <th> Product Name </th> <th> Price</th> <th> Quantity </th> <th> Total </th>  </tr></thead><tbody>';
    $tc = '<td colspan="3">Grand Total</td> <td colspan="2">'. $grandtotal.'</td> </tbody></table>  <div class ="box"><input class="btn" type="submit" value = "Update Cart " name="update"> <input class="btn" type="submit" value = "Place order " name="result"></div></form>  ';
    $finaltable = $to.$table.$tc;
    
    }
    else{
        $finaltable = "<div class = 'alert'>this cart is empty</div>";
    }
    
    }




    function showOrderList(){
        global $result;
        if(isset($_POST['result'])){
        
    
        
        $product_id = $_SESSION['product-id'];
        $qty = $_SESSION['qty'];
        $price = $_SESSION['price'];
        $prod_name = $_SESSION['prod-name'];
        
        
        $grandtotal = 0;
        
        for($i = 0; $i< 20; $i++){
            
            if($_SESSION['finalqty'][$i] >= 1 ){
                $table .= '
                <tr>  
            <td> <img height="100" width="100" src ="img/product-images/'.($i+1).'.jpg"> </td>
             <td> '.$prod_name[WhichMoreThanOne($product_id, $i+1)].'</td> 
             <td> '.$price[WhichMoreThanOne($product_id, $i+1)].'</td> 
             <td> '.$_SESSION['finalqty'][$i].' </td>
             <td> '. $_SESSION['finalqty'][$i] * $price[WhichMoreThanOne($product_id, $i+1)] .' </td>
             </tr>
        
                ';
                $grandtotal +=  $_SESSION['finalqty'][$i] * $price[WhichMoreThanOne($product_id, $i+1)];
                $_SESSION['finalqty'][$i] = 0;
            }
        }
        $to =  '   <table class="styled-table"><thead>  <tr> <th colspan = "5"> Orderlist:  Thank you for shopping in our website! </th> </tr>    <tr> <th> Image </th> <th> Product Name </th> <th> Price</th> <th> Quantity </th> <th> Total </th>  </tr></thead><tbody>';
        $tc = '<td colspan="3">Grand Total</td> <td colspan="2">'. $grandtotal.'</td> </tbody></table>   ';
        $result = $to.$table.$tc;
        
        }
        else{
            $result = "";
        }
        
        }
    
        function AddingCart(){
            global $pnum;
            global $name;
            global $description;
            global $img;
            global $price;
            global $respond;


            if ($_SERVER['HTTP_HOST'] == 'localhost')
            {
              define('HOST', 'localhost');
              define('USER', 'root');
              define('PASS', '1550');
              define('DB', 'palindromes');
            }
            else
            {
              define('HOST', 'sql200.epizy.com');
              define('USER', 'epiz_30848559');
              define('PASS', 'jmvmx8JOmwI2B');
              define('DB', 'epiz_30848559_palindromes');
            } 
          
            $pnum = $_GET["p"];
            $conn = mysqli_connect(HOST,USER,PASS,DB);
            $sql = 'SELECT * FROM product;';
            $results = mysqli_query($conn, $sql);
              
             while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
              {
                  if($row['id'] == $pnum){
                    $name = $row['name'];
                    $description = $row['description'];
                    $img = $row['image'];
                    $price = $row['price'];
                  }
              };
              if(isset($_POST['add-to-cart'])){
                if(isGranted()){
                 
            
            
                 if(!isset($_SESSION['product-id'])){
                  $_SESSION['product-id'] = array();
                  $_SESSION['qty'] = array();
                  $_SESSION['price'] = array();
                  $_SESSION['prod-name'] = array();
                 }
                 array_push($_SESSION['product-id'], $pnum);
                 array_push($_SESSION['qty'], $_POST['quantity']);
                 array_push($_SESSION['price'], $price);
                 array_push($_SESSION['prod-name'], $name);
                 $_SESSION['finalqty'][$pnum-1] += (int)$_POST['quantity'];
            
            
            
                  $respond = '<div class="granted">Added to the Cart successfully</div>';
                }
                else{
                  $respond = '<div class="alert">You have to login first</div>';
                }
              }

          
        }



  function showCatalog(){
    global $table;
    if ($_SERVER['HTTP_HOST'] == 'localhost')
    {
      define('HOST', 'localhost');
      define('USER', 'root');
      define('PASS', '1550');
      define('DB', 'palindromes');
    }
    else
    {
      define('HOST', 'sql200.epizy.com');
      define('USER', 'epiz_30848559');
      define('PASS', 'jmvmx8JOmwI2B');
      define('DB', 'epiz_30848559_palindromes');
    } 
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    $sql = 'SELECT * FROM product;';
    $results = mysqli_query($conn, $sql);
    $tableopen = '<table class="styled-table"> <thead> <tr> <th> Image </th> <th> Name </th> <th> Price </th> <th> Description</th> </tr>  </thead> <tbody>';
    $tableclose = '</tbody> </table>';
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
    {
      $id = $row['id'];
       $tablecontent .= '<tr>';
       $tablecontent .= '<td><img src="img/product-images/'.$id.'.jpg" width ="100" height="100"></td>';
       $tablecontent .= '<td>'.$row['name'].'</td>'; 
       $tablecontent .= '<td>'.$row['price'].'</td>';  
       $tablecontent .= '<td> <a class="button-29" href="product.php?p='.$id.'">view product details</a> </td>';
       $tablecontent .= '</tr>';
      
    };
  $table = $tableopen.$tablecontent.$tableclose;
  
  }      


function CreateAcc(){
    global $userer;
    global $un;
    global $pw;
    global $cpw;
    if ($_SERVER['HTTP_HOST'] == 'localhost')
{
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '1550');
  define('DB', 'palindromes');
}
else
{
  define('HOST', 'sql200.epizy.com');
  define('USER', 'epiz_30848559');
  define('PASS', 'jmvmx8JOmwI2B');
  define('DB', 'epiz_30848559_palindromes');
} 
$conn = mysqli_connect(HOST,USER,PASS,DB);
$sql = 'SELECT * FROM user;';
$results = mysqli_query($conn, $sql);
$useravail = true;

while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
{
    if($row['username'] == $_POST['username']){
       $useravail = false;
    }
   
};

UnPwCpwStay();

$hashedpw = passHash($_POST["password"]);

if(isset($_POST["submit"])){
    if($useravail && !empty($_POST["username"])){
      $sqlinsert = "INSERT INTO user
      (username, password)
      VALUES ('$un', '$hashedpw');";
      $resultinsert = mysqli_query($conn, $sqlinsert);
      header("location: index.php?g=creatingaccsucess");
  }
  else{
      $userer = "User already exists";
  }
}

}


function Index(){
    
    if ($_SERVER['HTTP_HOST'] == 'localhost')
{
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '1550');
  define('DB', 'palindromes');
}
else
{
  define('HOST', 'sql200.epizy.com');
  define('USER', 'epiz_30848559');
  define('PASS', 'jmvmx8JOmwI2B');
  define('DB', 'epiz_30848559_palindromes');
} 

$conn = mysqli_connect(HOST,USER,PASS,DB);
$sql = 'SELECT * FROM user;';
$results = mysqli_query($conn, $sql);
$hashedpw = passHash($_POST["password"]);
    
   while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
    {
        if($row['username'] == $_POST['username'] && $row['password']== $hashedpw){
            
            $_SESSION['granted']=true;
            $_SESSION['finalqty'] = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        }
        else{
            
        }
    };
 
}
  
?>