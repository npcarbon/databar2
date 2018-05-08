<?php
if (!empty($_FILES["filUpload"]["name"])) {
	# code...
for($i=0;$i<count($_FILES["filUpload"]["name"]);$i++)
	{
		if($_FILES["filUpload"]["name"][$i] != "")
		{
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"][$i],"imgaes/products/".$_FILES["filUpload"]["name"][$i]))
			{
				//*** Insert Record ***//
				
			}
		}
	}
}
?>
<HTML>
<HEAD>
<TITLE>PHP jQuery Dynamic Textbox</TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css" />
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<style type="text/css">
	body{font-family: "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif;font-size: 14px;background-color: #CCCCCC;}
.float-clear{clear:both;}
.float-left{float:left;}
#outer {margin: 0 auto;width: 50%;border-top: #333 2px solid;background-color: #FFFFFF;}
.product-item input[type="text"] {padding: 5px;border:#ccc 1px solid;border-radius:4px;margin: 0px 10px;}
.product-item input[type="checkbox"] {margin: 10px;}
#header div{padding: 20px 5px 15px;margin: 0px 10px;}
.col-heading{width:150px;font-size:16px;font-weight:bold;}
.footer{padding:10px; background:#333;margin-top:20px;}
.btn-action{padding:10px;}
.btn-action input[type="button"]{padding:5px; border:#CCCCCC 1px solid; border-radius: 4px;}
input[type="submit"]{padding:5px 20px; border:#000000 1px solid; border-radius: 4px; background-color:#09f;color:#fff;}
.success{color:#66CC00;padding: 5px; font-weight:bold;}
</style>
<SCRIPT>
function addMore() {
	$("<DIV>").load("input.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
</HEAD>
<BODY>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<DIV id="outer">
<DIV id="header">
<DIV class="float-left">&nbsp;</DIV>
<DIV class="float-left col-heading">Item Name</DIV>
<DIV class="float-left col-heading">Item Price</DIV>
</DIV>
<DIV id="product">
<?php require_once("input.php") ?>
</DIV>
<DIV class="btn-action float-clear">
<input type="button" name="add_item" value="Add More" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />
<span class="success"><?php if(isset($message)) { echo $message; }?></span>
</DIV>
<DIV class="footer">
<input type="submit" name="save" value="Save" />
</DIV>
</DIV>
</form>
</BODY>
</HTML>