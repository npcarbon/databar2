
<footer id="fw-footer">
  <div class="container">
    <!--<p class="text-muted" style="color:#000;"> -->
        <ul>

        <li style="color:black;">Copyright &copy; 2015, DATABAR Company Limited</li>
        <li><a class="menu-nav <?php if ($_SERVER["REQUEST_URI"] == "/partner.php") echo "current";?>"
         href="partner.php">Business Partner</a></li>
        <li><a class="menu-nav <?php if ($_SERVER["REQUEST_URI"] == "/channelpartner.php") echo "current";?>"
         href="channelpartner.php">Channel Partner</a></li>
<li><a class="menu-nav <?php if ($_SERVER["REQUEST_URI"] == "/service.php") echo "current";?>" href="service.php">
  Reseller Services</a></li>
    </ul> 
  </div>
</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
