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
<link rel="stylesheet" href="css/stylepages.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/webstyle.css">
<link rel="stylesheet" href="css/slideshow.css">
<style type="text/css">
 .box h1,.box h2,.box h3,.box p{
    color:black;
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
<body style="padding-top: 100px;">




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

              



<div style="background-color:#ffffff; text-align:center;">
  <div class="row box">

<?php
	$cmd="SELECT partner.* , partner_group.PG_Name FROM partner
		LEFT JOIN partner_group on partner.Partner_Group = partner_group.PG_ID";
	$que=$conn->query($cmd);
	while ($res=$que->fetch_assoc()) {
		# code...
		$partnerName =  $res['PG_Name'];
		if ($res['PG_Name'] = $partnerName) {
			# code...
			echo $partnerName.'<br>';
			
			}
		
		// do {
		// 	# code...
		// } ($res['Partner_Group'] = $res['Partner_Group'])
	}
?>




    <h4>Knox Platform</h4>

    <h1><strong>A secure device is a<br />
    reliable device</strong></h1>

    <div class="col-md-8 col-md-offset-2" style="padding: 2%;">
    <p>The Samsung Knox platform is built into Samsung smartphones, tablets, and wearables at the manufacturing stage, so you have it the moment you unpack your device. The Knox platform consists of overlapping defense and security mechanisms that protect against intrusion, malware, and more malicious threats.</p>

    <p>To further protect these devices for high security use cases, Samsung developed resilient and user-friendly Knox solutions.</p>
    </div>
  </div>

  <div class="row" style="padding:5% 0 5% 0">
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"><img src="images/Knox/home-1.jpg" style="width:100%" /></div>
  </div>


<div style="padding-top:2%">&nbsp;</div>
<span style="color:#ffffff">
        <div class="bgblack" style="padding-top: 2% " >
                   <h4>Knox Solutions</h4>
                   <h1><strong>Covered every step of the way</strong></h1>
                      <div class="tab">
         
                         <strong><h3><button class="tablink active" onclick="openNumb(event,'1')">IT ADMINS</button> |
                          <button class="tablink" onclick="openNumb(event,'2')">DEVELOPERS</button> |
                          <button class="tablink" onclick="openNumb(event,'3')">INDIVIDUALS</button></h3></strong>
                      </div>

                    <!-- Tab content -->
                  <div id="1" class="Numb">
                      <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/2018-05-18_13-14-07.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Knox IT solutions leverage the Knox platform, and provide IT admins with end-to-end solutions, from configuration and deployment, to managing, securing and maintaining devices.</h4>
                            </div>
                      </div>
                  </div>
                  <div id="2" class="Numb" style="display:none">
                    <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/2.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Build and deploy your app on secure Samsung devices with Knox developer tools, a diverse set of SDKs, code libraries, and support materials available from our Samsung Enterprise Alliance Program.</h4>
                            </div>
                      </div>
                  </div>
                  <div id="3" class="Numb" style="display:none">
                     <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/3.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Your financial, health, and government information is always safe on Samsung consumer apps leveraging Knox. Learn more about apps that use Knox to verify system security and safeguard data.</h4>
                            </div>
                      </div>
                  </div>
            </div>
          <script>
          function openNumb(evt, NumbName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("Numb");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(NumbName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          </script>
    </span>

   <!--  <style type="text/css">
      @media
    </style> -->
    <div class="box" style="padding-top:2%"> 
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1">
            <h1><strong>A flexible device management experience</strong></h1>
        </div>
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1" style="padding-top: 3%;">
          <p>With the Knox platform, over 1,000 APIs are available for apps to leverage granular management and control features of Samsung devices. Samsung has used these APIs to create our IT solutions, and also offers them to developers to enhance their apps with the Knox platform.</p>
        </div>
      </div>
      <div class="row">
         <div class="col-md-12" style="padding-top: 3%;">
          <img src="images/Knox/0zkyUI2B0-mJIuFm.jpg" width="100%">
        </div>
      </div> 
    </div>

    <div class="bgblack" style="padding: 3%;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">  
          <h1>Safeguards against threats at all times</h1>
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="padding-top: 2%;">
          <p>Samsung's Knox Platform is fused into devices at both the hardware and software level, underneath the operating system. Turn on your phone, tablet or wearable, and Knox actively safeguards your personal and business information.</p>
        </div>
      </div>
      <style type="text/css">
      .Select-icon  {
        list-style-type: none;
      /*  position: absolute;
        top: 40%;
        left: 30%;
        transform: translate(-50%,-50%);*/
      }
      .Select-icon li {
        float: left;
        width: 80px;
        height: 80px;
        line-height: 80px;
        background-color: #fff;
        text-align: center;
        margin: 5%;
        border-radius: 50%;
        transition: .3s;
      }
      .Select-icon li:hover {
        background: blue;
      }
      </style>
      <div class="container" style="padding: 5%;">
      <div class="row" style="display: flex; flex-wrap: wrap;  text-align: left;"  >
          <div class="col-md-7 col-xs-12" style="padding: 3% 0 3% 0;"> 
                <p>Even when your device is off, all your data is encrypted by default. The encryption key is stored in a secure area called TrustZone in the device chipset.</p>
                <!-- <div class="Select-icon" style="margin-top: 10%;"> -->
        
                  <ul class="Select-icon">
                    <li><img src="images/Knox/power-off.svg" width="50%"></li>
                    <li>asd</li>
                    <li>asd</li>
                  </ul>
          
                <!-- </div> -->
          </div>
          <div class="col-md-5 " style="padding: 0 7% 3% 12%;"> 
                <img alt="Increased touch sensitivity" src="images/Knox/kp-off.jpg" style="float:right; width: 100%;" />
          </div>
      </div>
    </div>
 
        </div>
      </div>
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