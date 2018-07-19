<div class="navbar navbar-default navbar-fixed-top my-navbar" style="height: 80px;">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand"><img src="images/logo1.png" width="180px"></a>
    </div>
<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right" style="  opacity: 1;">
        <li>
          <div class="dropdown">
            <a href="aboutus.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">About us</a> 
          </div>
        </li>
        <li>
          <div class="dropdown">
            <a class="dropbtn" href="#" style="font-family: 'Signika', sans-serif;">Products</a> 
             <div class="dropdown-content fadedInUp">
              <?php
              $sql1 = "SELECT * FROM groups 
                      ORDER BY  `Group_ID` ASC ";
              $query1 = $conn->query($sql1);
              while ($result1 = $query1->fetch_assoc()) {
              if ($result1['Group_Name'] == Knox){
                 echo '<a href="knox.php">'.$result1['Group_Name'].'</a>';
               } else {
               echo '<a href="product.php?group='. $result1['Group_Name']. '"> '. $result1['Group_Name'] .'</a>';
              }
           }
                ?>
            </div>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <a href="service.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">Services</a> 
          </div>
        </li>
        <li>
          <div class="dropdown">
            <a href="customer.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">Customers</a> 
          </div>
        </li>
        <li>
          <div class="dropdown">
            <a href="partners.php" class="dropbtn" style="font-family: 'Signika', sans-serif;">Partners</a> 
          </div>
        </li>
        <li>
          <div class="dropdown">
            <a href="contact.php" class="dropbtn">Contact</a> 
          </div>
        </li>
			</ul>
		</div>
	</div>
  </div>  
</div>
