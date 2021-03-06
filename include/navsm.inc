<style>

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 999;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown-menu{
  background-color: #111;
  transition: 0.3s;
  color: #818181;
}
.dropdown-menu li a{
  color: #818181;
  font-size: 1.2em;
}

.btnnav {
  background-color: #ffffff;
  box-shadow: 1px 1.732px 12px 0px rgba( 0, 0, 0, .14 ), 1px 1.732px 3px 0px rgba( 0, 0, 0, .12 );
  border-radius: 100px;
  transition : all 1s ease;
  top: 0.5em;
  left: 0.5em;
  color: #333;
  font-size: 22px;
  position: fixed;
  text-decoration: none;
  width: 35px;
  height: 35px;
  /*line-height: 30px;*/
  text-align: center;
  z-index: 99;
}
.btnnav:hover {
    background: #535bd4;
    color: #ffffff;
}
</style>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a style="padding: 0;" href="index.php" class="text-center"><img src="images/LogoLight.png" width="30%"></a>

  <ul style="padding: 0;">
        <li class="dropdown">
          <a  style="padding: 0;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu" style="position: relative;text-align: center;">
            <li><a href="product.php?group=1">Mobility</a></li>
            <li><a href="product.php?group=2">Printer</a></li>
            <li><a href="product.php?group=3">Micro Computer/PDA</a></li>
            <li><a href="product.php?group=4">Scanner/Barcode</a></li>
          </ul>
        </li>
        <a style="padding: 0;" href="service.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">Services</a>
        <a style="padding: 0;" href="customer.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">Customsers</a>
        <li class="dropdown"  style="padding-top: 0;">
          <a style="padding: 0;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Partners <span class="caret"></span></a>
          <ul class="dropdown-menu" style="position: relative;text-align: center;">
            <li><a href="business-partners.php">Business Partners</a></li>
            <li><a href="chanel-partners.php">Chanel Partners</a></li>
          </ul>
        </li>
        <a  onclick="closeNav()" style="padding: 0;" class="dropbtn" style="font-family: 'Signika', sans-serif;"  data-toggle="modal" data-target="#modal1">Contact</a>
      </ul>
</div>


<a class="btnnav" onclick="openNav()"><i class="fa fa-align-justify" style="padding-top: 8px;"></i></a>


<script>
function openNav() {
   document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    // document.body.style.backgroundColor = "white";
}
</script>
     
