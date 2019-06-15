<?php include_once("ss.php"); 
Session :: init();
?>
<?php include_once("../config.php");?>
  <?php include_once("../database.php");?>
  <?php include_once("format.php");?>
  <?php
  $db = new Database();
  $fm = new Format();
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type=""  href="imges/d.png">
    <title>LOG IN</title>
  <?php include_once("head.php"); ?>

</head>
<body>
  <section id="contact" class="py-5  text-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body text-primary">
            <h5 class=" lead card-title text-center display-4 font-weight-bold"><b>Admin Panel</b></h5>
            <?php

          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $user = $fm->validation($_POST['user']);
            $password =$fm->validation(md5($_POST['password']));
             
            $user = mysqli_real_escape_string( $db->link,$user);
            $password = mysqli_real_escape_string($db->link,$password);

            $query= "SELECT * FROM login WHERE user='$user' AND password ='$password'";
            $read = $db->select($query);
             if(isset($_GET['a']) /*you can validate the link here*/){
    $_SESSION['link']=$_GET['a'];
 }
            if($read != false){

              $value = mysqli_fetch_array($read);
              $row = mysqli_num_rows($read);
            if($row > 0){
                   Session :: set("index",true);
                   Session :: set("user",$value['user']);
                   Session :: set("userID",$value['id']);
                   header("Location:admin.php");
            }else{
                   echo "<span style='color:red;font-size:18px;'>User or password not match !!!.</span>";
            }
          
        }else{
          echo "<span style='color:red;font-size:18px;'>User or password not match !!.</span>";
        }
      }
            ?>
            <form class="form-group" action="index.php" method="post">
              <div class="form-group">
                <label for="inputEmail" class="lead font-weight-bold">User Name</label>
                <input type="text" id="inputEmail" class="form-control" name="user" placeholder="User Name" >
                
              </div>

              <div class="form-group">
                <label for="inputPassword" class="lead font-weight-bold ">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password"  placeholder="Password">
                
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Sign in</button>
              
            </form>
          </div>
          <div class="card-footer lead font-weight-bold">Don't Have An Account<a href="sign.php?a=register">Register Now!</a></div>
</div>
        </div>
      </div>
    </div>
  
</section>
<section>
  
</section>
</body>
</html>

