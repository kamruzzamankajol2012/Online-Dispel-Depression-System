<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success Story</title>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("share-nav.php");
   ?>
   <!--Navbar-->

   <!--data base connectio and configure code-->
  <?php include_once("config.php");?>
  <?php   include_once("database.php");?>
  <!--database connection and configure code-->

<!--main part start-->
<section id="creat-section" class="text-center py-5 bg-dark">
<div class="container">
  <h2 class="display-4 pb-5">Story</h2>
 <div class="row ">
  

           <!--story 2 start-->
<div class="col-md-12">
<div class="card bg-warning text-dark">
  <div class="card-header">
    <h3>Success Story</h3>
  </div>
               <div class="card-body">
                <!-- start pagination-->
                <?php 
                $per_page = 3;
                if (isset($_GET["page"])) {

                  $page =$_GET["page"];
                }else{
                  $page = 1 ;
                }

                $start_from = ($page-1)*$per_page;
                ?>
                <!-- end pagination-->
                 <?php
                   $db = new Database();
                   $query = "SELECT * FROM sstory limit $start_from ,$per_page";
                   $read = $db->select($query);
                    ?>
                    <?php if($read) {?>
                          <?php while($row = $read->fetch_assoc()){ ?>
                                      <p class="lead text-left font-weight-bold"> <b>Name</b></p>
                                <p class="lead text-left">
               <?php echo $row['name'] ;?>
                

               </p><br>
                            <p class="lead text-left font-weight-bold"> <b>Story</b></p>
                                <p class="lead text-left">
               <?php echo $row['msg'] ;?>
                

               </p>
               

               
               <?php } ?> <!--end while loop-->
               <?php } else{ ?>
                 <p>Data is not Valid</p>
               <?php } ?>


               </div>
             </div>
           </div>
<?php include_once("com.php"); ?>
<!-- start pagination-->
<?php 
$query = "SELECT * FROM sstory";
$row =$db->select($query);
$total_rows = mysqli_num_rows($row);
$total_pages = ceil($total_rows/$per_page);

 echo "<span class='text-center paginatio '><a href='success.php?page=1' >".'First Page'."</a>" ;
for($i=1;$i<=$total_pages;$i++){
  echo "<a href='success.php?page=".$i."'>".$i."</a>";
}
echo "<a href='success.php?page=$total_pages' >".'Last Page'."</a></span>" ?>
<!-- end pagination-->

   </div>


</div>
</section>

<!--main part end here-->

<!--search
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
search end here-->

<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer end-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
