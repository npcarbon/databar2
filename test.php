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
<link rel="stylesheet" type="text/css" href="flexboxgrid.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/slideshow.css">
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
          $sql = "SELECT  * FROM products"; 
          $query = $conn->query($sql);
                ?>
                <?php

                     $result = mysqli_fetch_array($query,MYSQLI_ASSOC); 
                 ?>

                
                <div style=" background-color: #ffffff; padding: 0px;">
                    <div class="col-md-12 col-sm-12 text-right" style=" background-color: #1E2D5A; padding-top: 1%; padding-bottom: 1%; margin: 0px; color: #ffffff; padding-right:5%;" >
                          <a href="index.php">Home</a> / <a href="#">Products</a> / .......
                    </div>
                    <div style="height: 10px;"></div>
                    <div class="container" style="text-align: center;">
                     

                     <h1 style="text-align:center; padding-top: 5%;"><strong>Fit for life on the move</strong></h1><br>

                        <p style="text-align:center">Rugged design with a sense of sophistication. At a slim 9.7mm wide, the Galaxy Xcover4 is thinner than previous generations and features an easy-to-grip, non-slip finish. It won&rsquo;t slide out of your hand unexpectedly while on the go.</p>

                        <p style="text-align:center; padding-top: 5%;"><img alt="Fit for life on the move" src="Admin/imgaes/products/xcover4-1.jpg" style="width:100%" /></p>

                        <h1 style="text-align:center"><strong>Reliably durable</strong></h1><br>

                        <p style="text-align:center">Designed to function wherever you go, with IP68 and MIL-STD 810G certification, the Galaxy Xcover4 is durable enough to withstand harsh conditions. Whether you&rsquo;re hiking or playing outdoor sports. you can rest assured your device is protected against dust and water.</p>

                        <p style="text-align:center; padding-top: 5%;"><img alt="Reliably durable" src="Admin/imgaes/products/xcover4-2.jpg" style="width:100%" /></p>

                        <p style="text-align:center">*Can be immersed to a maximum water depth of 1.5 meters for up to 30mins.</p>

                        <h1 style="text-align:center; padding-top: 5%;"><strong>Experience richer resolution</strong></h1><br>

                        <p style="text-align:center">Open your eyes to extraordinary colour. Featuring a bigger screen than previous models, the Galaxy Xcover4 display measures 5.0&rdquo; to deliver exceptional detail. Discover an overall better viewing experience when streaming your favourite multimedia.</p>

                        <p style="text-align:center; padding-top: 5%;"><img alt="Experience richer resolution" src="Admin/imgaes/products/xcover4-3.jpg" style="width:100%" /></p>

                        <h1 style="text-align:center"><strong>Shoot exceptional photos</strong></h1><br>

                        <p style="text-align:center">Higher resolution to create stunning stories. Whether you&rsquo;re taking selfies or capturing stunning landscapes its front 5MP and 13MP rear flash cameras will bring out the best of the world around you. Simply double click the home button for instant access and begin shooting.</p>



                        <p style="text-align:center; padding-top: 5%;"><img alt="Shoot exceptional photos" src="Admin/imgaes/products/xcover4-4.jpg" style="width:100%" /></p>



                        <section style="margin: 0; padding: 0; ">
                            <div class="row" style="display: flex; flex-wrap: wrap; align-items: center;" >
                                <div class="col-md-6 col-xs-12" style=""> 
                                        <h1><strong>Increased touch sensitivity</strong></h1>
                                                <p>Keep your hands warm and dry during use. The Galaxy Xcover4 features an intuitive display that lets you interact with your device even with gloves on so you can go on working outside or enjoying outdoor activities without any issue.</p>
                                </div>
                                <div class="col-md-6 col-xs-12 align-items-center"> 
                                      <img alt="Increased touch sensitivity" src="Admin/imgaes/products/xcover4-5.jpg" style="float:right; width: 100%;" />
                                </div>
                            </div>
                        </section>
                        <section style="margin: 0; padding: 0; ">
                            <div class="row" style=" flex-flow: row-reverse; display: flex; flex-wrap: wrap; align-items: center;" >
                                <div class="col-md-6 col-xs-12" style=""> 
                                        <h1><strong>Quick and easy access</strong></h1>
                                                <p>Designed to boost efficiency the Galaxy Xcover4 features an intuitive Active Key that gives users speedy access to their preferred apps. Personalize the key function to open the camera or LED torch light in a flash thanks to its smart functionality.</p>
                                </div>
                                <div class="col-md-6 col-xs-12 align-items-center"> 
                                      <img alt="Increased touch sensitivity" src="Admin/imgaes/products/xcover4-6.jpg" style="float:right; width: 100%;" />
                                </div>
                            </div>
                        </section>
                        <section style="margin: 0; padding: 0; ">
                            <div class="row" style="display: flex; flex-wrap: wrap; align-items: center;" >
                                <div class="col-md-6 col-xs-12" style=""> 
                                        <h1><strong>Seamless transactions with NFC</strong></h1>
                                                <p>With NFC integration the Galaxy Xcover4 doubles as your wallet to make paying for purchases or transportation super easy. Simply swipe your device at the counter or subway turnstile to fulfill the transaction and never worry about being without money again.</p>
                                </div>
                                <div class="col-md-6 col-xs-12 align-items-center"> 
                                      <img alt="Increased touch sensitivity" src="Admin/imgaes/products/xcover4-7.jpg" style="float:right; width: 100%;" />

                                </div>
                            </div>
                        </section>
                        <p style="text-align:center">*Samsung Pay is incompatible with Galaxy Xcover4.</p>
                        <section style="margin: 0; padding: 0; ">
                            <div class="row" style="flex-flow: row-reverse; display: flex; flex-wrap: wrap; align-items: center;" >
                                <div class="col-md-6 col-xs-12" style=""> 
                                        <h1><strong>Packs more power</strong></h1>
                                                <p>Power made to deliver even longer usage times to maximize enjoyment. The Galaxy Xcover4 comes equipped with a 2800mAh battery to ensure you have plenty of charge to keep your workflow or content streaming going without interruption.</p>
                                </div>
                                <div class="col-md-6 col-xs-12 align-items-center"> 
                                      <img alt="Increased touch sensitivity" src="Admin/imgaes/products/xcover4-8.jpg" style="float:right; width: 100%;" />
                                </div>
                            </div>
                        </section>
                       



                      


                      <div class="row between-xs">
    <div class="col-xs-2">
        <div class="box">
            between
        </div>
    </div>
    <div class="col-xs-2">
        <div class="box">
            between
        </div>
    </div>
    <div class="col-xs-2">
        <div class="box">
            between
        </div>
    </div>
</div>

                      


                        


                        <h1 style="text-align:center"><img alt="Absolute privacy" src="Admin/imgaes/products/xcover4-9.jpg" style="float:right; width:50%" /></h1>

                        <h1 style="text-align:center">&nbsp;</h1>


                        <h1><strong>Absolute privacy</strong></h1>

                        <p>Spend less time worrying and more time enjoying with peace of mind protection. Samsung Knox features passport-grade security so you can rest assured that your device is defended from real-time malware threats that put your data and privacy constantly at risk.</p>

                        <p style="text-align:center">&nbsp;</p>

                 
                  

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