<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar-->

   <!--data base connectio and configure code-->
  <?php include_once("config.php");?>
  <?php   include_once("database.php");?>
  <!--data base connectio and configure code-->

<!--main part start-->
<section id="creat-section" class="text-center py-5 bg-dark">
<div class="container">
  
 <div class="row">
  <!--story 1 start-->
   <div class="col-md-12">
<div class="card bg-light text-dark">
  <div class="card-header">
    <h3>Search result</h3>
  </div>
<div class="card-body">
  <?php
  if(!isset($_GET['search']) || $_GET['search'] == NULL ){
  header("Location:404.php");
}else{
  $search =$_GET['search'];
}
  ?>

  <?php
    $db = new Database();
    $query = "SELECT * FROM famly WHERE id LIKE '%$search%' OR tit LIKE '%$search%'  OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION SELECT * FROM har WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%'  UNION 
    SELECT * FROM lon WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM story WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM story1 WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM story2 WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM uns WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM others WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM marriage WHERE id LIKE '%$search%' OR tit LIKE '%$search%' OR problem LIKE '%$search%' OR  solution LIKE '%$search%' UNION 
    SELECT * FROM doc WHERE id LIKE '%$search%' OR tit LIKE '%$search%'   OR name LIKE '%$search%' OR apt LIKE '%$search%'";
    $read = $db->select($query);
     ?>
     <?php if($read) {?>
           <?php while($row = $read->fetch_assoc()){ ?>
           <!--<p class="lead text-left font-weight-bold"> <b>সমস্যা:</b></p><br>-->
                 <p class="lead text-left">

<?php echo $row['problem'] ;?>


</p>

<!--<p class="lead text-left"> <b>পরামর্শ:</b></p><br>-->
<p class="lead text-left">
  
  <?php echo $row['solution'] ;?>

</p>
<?php } ?>
<?php } else{ ?>
  <p>Data is not Valid</p>
<?php } ?>

               </div>
             </div>
           </div>
</div>
           </div>
           <!--story 1 end-->

       
         
       </section>    
<!--main part end-->

<!--search-->
<section id="newsletter" class="py-5  text-light text-center" style="background-color: #af6d1d;">
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
<!--search end-->

<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer end-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
