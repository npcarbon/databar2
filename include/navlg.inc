<style type="text/css">
  .shadow {
  -webkit-box-shadow: 1px 1px 3px 2px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    1px 1px 3px 2px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         1px 1px 3px 2px #ccc;
}
</style>
<div class="navbar navbar-default shadow" style="height: 80px;">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
    </div>
<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
        <li>
          <div class="dropdown">
            <a class="dropbtn" href="#" style="font-family: 'Signika', sans-serif;">Product</a> 
             <div class="dropdown-content fadedInUp">
              <!--<div class="subdd">
                <a href="#" class="subbtn">Mobility</a>
                  <div class="sub-content">
                    <a href="#">Product's name</a>
                    <a href="#">Product's name</a>
                    <a href="#">Product's name</a>
                  </div>
              </div> -->
              <a href="product.php?group=1">Mobility</a>
              <a href="product.php?group=2">Printer</a>
              <a href="product.php?group=3">Micro Computer/PDA</a>
              <a href="product.php?group=4">Scanner/Barcode</a>
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
            <a class="dropbtn" style="font-family: 'Signika', sans-serif;">Partners</a> 
              <div class="dropdown-content fadedInUp">
                <a href="#">Business Partners</a>
                <a href="#">Chanel Partners</a>
              </div>
          </div>
        </li>
        <li>
          <div class="dropdown" style="font-family: 'Signika', sans-serif;"  data-toggle="modal" data-target="#modal1">
            <a href="#" class="dropbtn">Contact</a> 
          </div>
        </li>
			</ul>
		</div>
	</div>
  </div>  
</div>