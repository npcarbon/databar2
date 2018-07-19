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
  		<a style="padding:10% 0 0 0; margin:0;" href="aboutus.php" class="dropbtn" >About us</a>
        <li class="dropdown" style="padding: 0; margin:0">
          <a  style="padding: 0; margin:0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu" style="position: relative;text-align: center;">
             <?php
              $sql1 = "SELECT * FROM groups 
                      ORDER BY  `Group_ID` ASC ";
              $query1 = $conn->query($sql1);
              while ($result1 = $query1->fetch_assoc()) {
              if ($result1['Group_Name'] == Knox){
                 echo '<li><a href="knox.php">'.$result1['Group_Name'].'</a></li>';
               } else {
               echo '<li><a href="product.php?group='. $result1['Group_Name']. '"> '. $result1['Group_Name'] .'</a></li>';
              }
           }
                ?>
          </ul>
        </li>
        <a style="padding: 0;" href="service.php" class="dropbtn" >Services</a>
        <a style="padding: 0;" href="customer.php" class="dropbtn" >Customers</a>
      	<a style="padding: 0;" href="partners.php" class="dropbtn" >Partners</a>
        <a style="padding: 0;" href="contact.php" class="dropbtn" >Contact</a>
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
     
