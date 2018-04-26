<?php
        ini_set('display_errors', 1);
        error_reporting(~0);
      include 'include/condb.php';

      $sql = "SELECT * FROM Customer";
      $query = $conn->query($sql);
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
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/slideshow.css">

</head>
<body style="padding-top: 50px;">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



          <div class="visible-md visible-lg ">
               <?php
                     include 'include/navlg.inc';
               ?>
          </div>
          <div class="visible-xs visible-sm">               
               <?php
                     include 'include/navsm.inc';
               ?>
          </div>

<!-- ###################### Start Content ############################# -->
<div id="product" style="background: url(images/customer.jpg);">
  <div class="overlay">   
    <h1 style="text-align: center;padding-bottom: 50px;padding-top: 50px;"><u>We are trust from </u></h1>
  </div>
</div>
<div style=" background-color: #fff;padding: 50px;">
  <!-- <div class="container"> -->
    <div class="row">
      <?php

        while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
          # code...
          ?>
          <div class="col-md-2 col-sm-4" style="padding-top: 30px; text-align: center;">
            <a href="<?= $result['Cus_Url']; ?>" target="_blank"><img src="Admin/customers/<?= $result['Cus_Pic']; ?>" height="70" ></a>
          </div>
      <?php    
        }
      ?>
    </div>    
  <!-- </div> -->
 
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