<!--main part-->
<footer id="footer-section" class=" text-dark py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2 class="">Contact Us</h2>
        <p class="lead">Question?We Have Answer ,Try Us</p>
        
        
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#contactModal">Contact Us</button>
      </div>
      <div class="col-md-4 text-center">
       <h2>Stay Connect With Us</h2>
       <a href="https://www.facebook.com/Dispel-Depression-308256243337522/?modal=admin_todo_tour&ref=notif&notif_id=1540225585020923&notif_t=page_invite"><i class="fa fa-facebook-square " style="margin-right: 10px;"></i></a><i class="fa fa-google-plus-square" style="margin-left: 10px;"></i>
      </div>
      <div class="col-md-4">
      <h2>More link</h2>
      <p class=""><a href="">Privecy Policy</a></p>
      <p class=""> <a href="">Terms and Condition</a></p>
      </div>
    </div>
  </div>

</footer>

<section class="py-5 bg-success text-center">
  <p class="lead"><i class="fa fa-copyright  f2 bg-success " style=""></i>Daffodil International University</p>
</section>
<!--main part-->
<!--Contact-us-->
<div class="modal " id="contactModal">
  <div class="container">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h3 >Contact Us</h3>
          <button class="close text-light" data-dismiss="modal">&times;
          </button>

        </div>
        <?php include_once("config.php"); ?>
<?php include_once("database.php");?>
<?php 
$db = new Database();
if(isset($_POST['submit'])){
  $name =mysqli_real_escape_string($db->link, $_POST['name']);
 
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  
  $msg=mysqli_real_escape_string($db->link, $_POST['msg']);
  if($name == '' || $email =='' || $msg =='' ){

  $error ="Please INPUT the form";

}else{

  $query="INSERT INTO con(name,email,msg) Values('$name','$email', '$msg')";
  $creat =$db->insert($query);
}

}
?>
<?php
if(isset($error)){
 echo"<span style='color:red;'>".$error."</span>";
}
?>
        <div class="modal-body">
          <form action="footer.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name"  name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="msg" id="message"></textarea>
            </div>
            <input type="submit" name="submit" value="Send" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!--Contact-us end-->
