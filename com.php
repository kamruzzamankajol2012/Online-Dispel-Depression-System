
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once("head.php"); ?>

</head>
<body>
  

  <!--tittle
  <section class="py-5" style="background-color: #79AC44;">
    <p class="lead display-4 py-5 text-center"><b>Share Your Story</b></p>
  </section>
  end tittle-->
  
  <!--main part-->
<section id="contact" class="py-5  text-dark" style="background-color: ;">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="card bg-warning" style="background-color:">
        <div class="card-body">
          <!--<h4 class="text-center">Type Here And Send</h4>-->
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            <!--success stoty data start here-->
    <?php include_once("config.php"); ?>
<?php include_once("database.php");?>



<?php 
$db = new Database();
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($db->link, $_POST['name']);
  $msg=mysqli_real_escape_string($db->link, $_POST['msg']);
  
 
  
  if($name == ''|| $msg == ''  ){

  $error ="Please INPUT the form";

}else{

  $query="INSERT INTO comn(name,msg) Values('$name','$msg')";
  $creat =$db->insert1($query);
}

}
?>
<?php
if(isset($error)){
 echo"<span style='color:red;'>".$error."</span>";
}
?>
<?php
    $db = new Database();
    $query = "SELECT * FROM comn";
    $read = $db->select($query);
     ?>
     <?php if($read) {?>
           <?php while($row = $read->fetch_assoc()){ ?>
            
                 <p class="text-left">
<?php echo $row['name'] ;?>



</p>
       
                 <p class="text-left">

<?php echo $row['msg'] ;?>


</p><br>
<?php } ?>
<?php } else{ ?>
  <p>Data is not Valid</p>
<?php } ?>
<!--sucess story data end here-->
            <form class="form-inline my-2 my-lg-0" action="com.php" method="post">
        <textarea cols="60" rows="1" name="name" class="form-control" placeholder="Type your name Here" ></textarea>      
      <textarea cols="120" rows="1" name="msg" class="form-control" placeholder="Comment Here" ></textarea>
      <button type="submit" name="submit" value="comment" class="btn btn-primary my-2 my-sm-0 text-light" >Comment</button>
    </form>
          </div>
        
        </div>
      </div>
     </div>
   </div>
 </div>
</div>
     </section>
<!--end main part-->

<!--search
<section id="newsletter" class="py-5 text-light text-center" style="background-color: #af6d1d;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="display-4">
          Search
        </h2>
        <p class="lead">Search here What you want</p>
        <form class="form-inline justify-content-center" action="search.php" method="get">



  <div class="input-group mb-2 mr-sm-2 mb-sm-0">

    <input type="text" class="form-control" id="inlineFormInputGroup" name="search" placeholder="Search Here">
  </div>



  <button type="submit" name="submit" value="Search" class="btn btn-primary">Search</button>
</form>
      </div>
    </div>
  </div>

</section>
search end-->

<!--footer-->

<!--footer-->
<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
