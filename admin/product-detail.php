<?php include '../include/condb.php';
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

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/animate.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">

<link rel="stylesheet" href="../css/magnific-popup.css">

<link rel="stylesheet" href="../css/owl.theme.css">
<link rel="stylesheet" href="../css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

<!-- Main css -->
<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/dropbtn.css">
<link rel="stylesheet" href="../css/slideshow.css">
<style type="text/css">
  h1, h2, h3, p{
    color: black;
    padding: 0;
  }
  hr {
  -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE -moz-use-text-color black;
  border-style: solid none;
  border-width: 1px 0;
  width: 70%;
}
</style>
</head>
<body>


<!-- PRE LOADER -->

<!-- <div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> -->

<?php
include 'sidebar.html';
?>


<!-- ###################### Start Content ############################# -->
<?php
include '../product-detail.php';
?>    

                
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