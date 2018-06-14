<?php include 'include/header.php';?>

<style type="text/css">
    .input-group .form-control{max-width: 250px;}
.tbl { border-top:2px solid #AAAAAA; border-bottom:2px solid #AAAAAA; background-color: #f5f5f5; text-align: center;margin-bottom: 20px;}
.tbl1{ background-color: #f5f5f5; text-align: center;margin-bottom: 20px;}
.menu{background-color: #f5f5f5; margin-bottom: 20px;}

a:link {text-decoration: none;}
.tal{text-align: left;}
.pd-p{text-align: center;margin-top: 0px;margin-left: 100px;}
.navbar-inverse{background-color: #167CC8;}
.arrow{width: 20px; height: 15px;margin-top: -3px;}
.navbar-default, body{background-color: #e4e6ea;}
.contactpic{width: 100%;}
label{width: 150px;font-size: 1.1rem;}
.col-md-12{padding: 0;}
.btn .btn-primary{background-color: #00285c; color: white;}
</style>


    <!-- Page Content -->
    <div class="container">
 <div  style="margin-top:10px;margin-bottom:20px;">
        <img src="images/mail.jpg" class="contactpic" />
         <p style="font-size:24px;color:#666666;padding-top:20px;"><b>Inquiry</b></p>
      </div>
      <div class="row" style="padding-bottom:0px;padding-top:0px;border-top:none;">

        <div class="col-lg-12" style="margin-top:-15px;padding:0px;">
         
 

<br>
        </div>
 </div>


<div class="col-lg-12 menu">
                <div class="form-group has-success row" style="border:none;">
                  <div class="col-lg-12">
                <h4><a href="#" style="color:#00285c !important;line-height:50px;font-size:18px;">General Inquiry</a></h4>
                <p><b>Please do not hesitate to get in touch with us.</b></p>
                <p><label style="color:red;width:10px;">*</label>is required field.</p>
            </div>

             
            
               <script type="text/javascript">
               function checkTextField() {
                var fname = document.getElementById("firstname").value;
                var lname = document.getElementById("lastname").value;
                var cname = document.getElementById("companyname").value;
                var address = document.getElementById("address").value;
                var mobile = document.getElementById("mobile").value;
                var fax = document.getElementById("fax").value;
                var office = document.getElementById("office").value;
                var email = document.getElementById("email").value;
                var i = document.getElementById("interested").value;
                var ip = document.getElementById("intersetedproduct").value;
                var note = document.getElementById("note").value;
var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

    if (fname == '') {
         var str = "Firstname Is Empty.";
         alert(str);
        return false;
    }
       if (lname == '') {
         var str = "Lastname Is Empty.";
          alert(str);
        return false;
    }
       if (cname == '') {
         var str = "Companyname Is Empty.";
          alert(str);
        return false;
    }
     
         if (mobile == '') {
         var str = "Mobile Is Empty.";
          alert(str);
        return false;
    }
               if (office == '') {
         var str = "Office Phone Is Empty.";
          alert(str);
        return false;
    }
      
    if(!pattern.test(email)){
        alert("Email's not correct");
        return false;
      }
               if (i == '-') {
         var str = "I am interested in, is not choose.";
          alert(str);
        return false;
    }
           if (ip == '-') {
         var str = "Interested product is not choose.";
          alert(str);
        return false;
    }
       
    alert("Send Email Complete.");
}
               </script>
<style type="text/css">
@media (max-width:768px){
    .lbl { margin-bottom: 40px; }
      .col-md-8{margin-top: 10px;}

}​
    
 
</style>

      <form class="form-inline"  method="post" action="email_result.php" name="myform" id="myform" onsubmit="return checkTextField();">
             <div class="col-lg-12">
                <div class="col-md-12">
                  <div class="form-group">
                     <label for="exampleInputName2">First Name <span style="color:red !important;">*</span></label>
                      <input type="text" id="firstname" name="firstname"  class="form-control" style="width:250px;" />
                  </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                     <label for="exampleInputName2">Last Name <span style="color:red !important;">*</span></label>
                      <input type="text" id="lastname" name="lastname" class="form-control" style="width:250px;" />
                  </div> </div>

                   <div class="col-md-12">
                  <div class="form-group">
                     <label for="exampleInputName2">Company Name <span style="color:red !important;">*</span></label>
                      <input type="text" id="companyname"  name="companyname" class="form-control" style="width:250px;" />
                  </div></div>

                  <div class="col-md-12">
                              <div class="form-group">
                     <label for="exampleInputName2">Address</label>
                      <textarea rows="4" id="address" name="address" class="form-control" style="width:250px;" ></textarea>
                  </div></div>

                               <div class="col-md-12">
                  <div class="form-group">
                     <label for="exampleInputName2">Mobile Phone <span style="color:red !important;">*</span></label>
                      <input type="text" id="mobile" name="mobile" class="form-control" style="width:250px;" />
                  </div></div>

                     <div class="col-md-12">
                    <div class="form-group">
                     <label for="exampleInputName2">Office Phone <span style="color:red !important;">*</span></label>
                      <input type="text" id="office" name="office" class="form-control" style="width:250px;" />
                  </div></div>

                      <div class="col-md-12">
                   <div class="form-group">
                     <label for="exampleInputName2">Fax</label>
                      <input type="text" id="fax" name="fax" class="form-control" style="width:250px;" />
                  </div></div>

                    <div class="col-md-12">
                          <div class="form-group">
                     <label for="exampleInputName2">Email <span style="color:red !important;">*</span></label>
                      <input type="text" id="email" name="email" class="form-control" style="width:250px;" />
                  </div></div>

                            <div class="col-md-12">
                       <div class="form-group">
                     <label for="exampleInputName2" style="padding-top:20px;"  class="lbl">Please provide specific questions or comments that allow us to best meet your needs
                     <span style="color:red !important;">*</span></label>
                    <textarea rows="6" id="note" style="margin-top:-40px;width:250px;" name="note" class="form-control"></textarea>
                  </div></div>

                          <div class="col-md-12">
                 <div class="form-group">
                     <label for="exampleInputName2">I am interested in <span style="color:red !important;">*</span> </label>
                     <select class="form-control" id="interested" name="interested" style="width:250px;"><option value='-'>--- Choose One ---</option>
                      <option value='Learning more about becoming a DATABAR Channel Partner'>Learning more about becoming a DATABAR Channel Partner</option>
                      <option value='Learning more about becoming a DATABAR Business/Manufacturer Partner'>Learning more about becoming a DATABAR Business/Manufacturer Partner</option>
                      <option value='Finding a technology reseller that can sell me the products I need'>Finding a technology reseller that can sell me the products I need</option>
                      <option value='I am a DATABAR customer and I need help'>I am a DATABAR customer and I need help</option>
                      <option value='Getting a general question answered about DATABAR'>Getting a general question answered about DATABAR</option>
                      <option value='Other'>Other</option>
                     </select>
                  </div></div>

                    <div class="col-md-12">
                 <div class="form-group">
                     <label for="exampleInputName2">Interested <span style="color:red !important;">*</span> </label>
                     <select class="form-control" id="intersetedproduct" name="intersetedproduct" style="width:250px;"><option value='-'>--- Choose Product ---</option>
                      <option value='Samsung Enterprise Business Solution'>Samsung Enterprise Business Solution</option>
                      <option value='Samsung Enterprise Mobility'>Samsung Enterprise Mobility</option>
                      <option value='Samsung Galaxy Tab Active'>Samsung Galaxy Tab Active</option>
                      <option value='Samsung Galaxy Tab Active'>Samsung KNOX</option>
                      <option value='Bixolon'>Bixolon</option>
                      <option value='Pointmobile'>Point Mobile</option>
                      <option value='Datalogic'>Datalogic</option>
                      <option value='Toshiba'>Toshiba</option>
                      <option value='Other'>Other</option>
                     </select>
                  </div></div>
             
                                 <div class="col-md-12">
                 <div class="form-group">
              <input type="submit" value="Send Email" class="btn btn-primary" />
                  </div></div>

                

            </div>
         
</form>
                </div>
            </div>

        </div>
</div>

<?php include 'include/footer.php';?>