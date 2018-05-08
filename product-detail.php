<?php include 'include/condb.php';
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
<style type="text/css">
  h1, h2, h3, p{
    color: black;
    padding: 0;
  }
  .box p{
    font-size: 1.2em;
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
        <?php

          $sql = "SELECT  * FROM products WHERE Pro_ID = '".$_GET['pro_id']."'"; 
          $query = $conn->query($sql);
                ?>
                <?php

                     $result = mysqli_fetch_array($query,MYSQLI_ASSOC); 
                 ?>

                <div style=" background-color: #ffffff; padding: 0px;">
                    <div class="col-md-12 col-sm-12 text-right" style=" background-color: #1E2D5A; padding-top: 1%; padding-bottom: 1%; margin: 0px; color: #ffffff; padding-right:5%;" >
                          <a href="index.php">Home</a> / <a href="#">Products</a> /<?= $result['Pro_Name']; ?>
                    </div>
                    <div style="height: 10px;"></div>


                    <!-- Session1 -->
                    <div class="container" style="padding-bottom: 50px;">
                        <div class="row" style="padding: 0; margin: 0;">
                            <!-- image product -->
                            <!-- <div class="col-md-1 col-sm-2 h1" style=""></div> -->
                            <div class="col-md-8 col-sm-8 h1" style="">
                                <h2><?= $result['Pro_Name']; ?></h2><br><center>
                                <img src="Admin/imgaes/products/<?= $result['Pic']; ?>" width= "70%"  ></center>   
                            </div>


                            <!--#Name Code Detail -->
                            <div class="col-md-4 col-sm-4" style="background-color: #fafafa; padding: 20px;  min-height: 660px; min-height: 35vw; padding: 2%;">
                                  <h3><?= $result['Pro_Name']; ?></h3>
                                  <p><?= $result['Pro_Code']; ?></p>
                                  <p><?= $result['Pro_Detail']; ?></p>
                                  <?php
if ($result['PDF'] != "") {
  echo '<center><a href="Admin/PDF/upload/'. $result['PDF'] .'" class="btn btn-primary btn-lg" role="button" style="margin-top: 10%; margin-bottom: 2%; border-radius: 50px; padding-left: 15%; padding-right: 15%; ">Download PDF</a></center>';
}else{
  echo "";
}
                                  ?>
                                  
                            </div>
                        </div><br><hr>


                        <!-- session 2 -->
                        <!-- tab/pills -->
                        <div class="container" style="padding-top: 2% ">
                            <div class="tab-content" >
                                 <?= $result['Pro_Descpt']; ?>
                            </div> 
                        </div>
                    </div>
          </div>

<section id="divider" style="background: #e6e6e6">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2>Relation Content</h2>
                          <div class="row" style="padding: 30px;">
                            <div class="col-sm-6 col-md-3" style="margin-top: 20px;">
                                  <div class="thumbnail">
                                    <h2 style="text-align: center;">Thumbnail label</h2>
                                    <img src="Admin/imgaes/products/<?= $result['Pic']; ?>" width= "40%" alt="...">
                                    <div class="caption">
                                      <h3>Thumbnail label</h3>
                                      <p>...</p>
                                      <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3" style="margin-top: 20px;">
                                  <div class="thumbnail">
                                    <h2 style="text-align: center;">Thumbnail label</h2>
                                    <img src="Admin/imgaes/products/<?= $result['Pic']; ?>" width= "40%" alt="...">
                                    <div class="caption">
                                      <h3>Thumbnail label</h3>
                                      <p>...</p>
                                      <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3" style="margin-top: 20px;" >
                                  <div class="thumbnail">
                                    <h2 style="text-align: center;">Thumbnail label</h2>
                                    <img src="Admin/imgaes/products/<?= $result['Pic']; ?>" width= "40%" alt="...">
                                    <div class="caption">
                                      <h3>Thumbnail label</h3>
                                      <p>...</p>
                                      <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3" style="margin-top: 20px;">
                                  <div class="thumbnail">
                                    <h2 style="text-align: center;">Thumbnail label</h2>
                                    <img src="Admin/imgaes/products/<?= $result['Pic']; ?>" width= "40%" alt="...">
                                    <div class="caption">
                                      <h3>Thumbnail label</h3>
                                      <p>...</p>
                                      <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                    </div>
                                  </div>
                                </div>
                          </div>
                        </div>
               </div>

</section>
                        <!-- Relation Types -->
                        

                
        
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