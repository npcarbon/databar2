<?php
include 'include/condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Databar</title>
<link rel="shortcut icon" href="favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

<!-- Main css -->
<link rel="stylesheet" href="css/webstyle.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/slideshow.css">

</head>
<body>


<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



          <div class="visible-md visible-lg visible-sm ">
               <?php
                     include 'include/navlg.inc';
               ?>
          </div>
          <div class="visible-xs">               
               <?php
                     include 'include/navsm.inc';
               ?>
          </div>

<!-- ###################### Start Content ############################# -->
<div class="container-fluid" style=" background-color: #fff;padding: 50px;">
  <?php
    $sql = "SELECT * FROM groups WHERE Group_ID = '".$_GET['group']."'";
    $query = $conn->query($sql);
      while ($result = $query->fetch_array(MYSQLI_ASSOC)) { ?>
       <h2 style="color: black; padding-bottom: 20px;"><?= $result['Group_Name'];?></h2>
      <div class="row container">
          <?php
          }
          $sql = "SELECT * FROM products WHERE Group_ID = '".$_GET['group']."'";
          $query = $conn->query($sql);
          while ($rs = $query->fetch_array(MYSQLI_ASSOC)) { ?>
          <div class="col-md-4 col-xs-6">
            <div class="thumbnail">
              <a href="product-detail.php?pro_id=<?= $rs['Pro_ID'] ?>"><img src="Admin/imgaes/products/<?= $rs["Pic"]; ?>"  style="padding: 20%;"></a>
              <h2 style="text-align: center; color: black;"><?= $rs["Pro_Name"]; ?></h2>
              <hr>
              <div class="caption">
                    <h3 class="text-center" style="margin-top: 0px;"><?= $rs["Pro_Code"]; ?></h3>
                    <p><?= $rs["Pro_Detail"]; ?></p>
              </div>
            </div>
          </div>
<?php
}
  ?> 
       </div>
</div>

<!-- ###################### End Content ############################# -->

<!-- Footer Section -->

<?php
     include 'include/foot.inc';
?>



<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>