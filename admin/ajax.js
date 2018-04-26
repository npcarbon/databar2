// JavaScript Document
$(document).ready(function(){
	// ส่วนของจังหวัดเมื่อมีการเปลี่ยนแปลง
	$("#Group").change(function(){
		$("#Type").empty();//ล้างข้อมูล
		$.ajax({
			  url: "data/getData.php",//ที่อยู่ของไฟล์เป้าหมาย
			  global: false,
			  type: "GET",//รูปแบบข้อมูลที่จะส่ง
			  data: ({ID : $(this).val(),TYPE : "Brand"}), //ข้อมูลที่ส่ง  { ชื่อตัวแปร : ค่าตัวแปร }
			  dataType: "JSON", //รูปแบบข้อมูลที่ส่งกลับ xml,script,json,jsonp,text
			  async:false,
			  success: function(jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
							var opt="<option value=\"0\" selected=\"selected\">Brand of Product</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["Brand_ID"] +"'>"+val["Brand_Name"]+"</option>"
    						});
							$("#Brand").html( opt );//เพิ่มค่าลงใน Select ของอำเภอ
		   	  }
		});	
		$("#GroupID").val($(this).val()); //กำหนดค่า ID ของจังหวัดที่เลือกให้กับ Textfield ของจังหวัด
	});
	// ส่วนของอำเภอเมื่อมีการเปลี่ยนแปลง
	$("#Brand").change(function(){
		$("#Type").empty();//ล้างข้อมูล
		$.ajax({
			  url: "data/getData.php",
			  global: false,
			  type: "GET",
			  data: ({ID : $(this).val(),TYPE : "Type"}),
			  dataType: "JSON",
			  async:false,
			  success: function(jd) {
							var opt="<option value=\"0\" selected=\"selected\">Type of Product</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["Type_ID"] +"'>"+val["Type_Name"]+"</option>"
    						});
							$("#Type").html( opt );
		   	  }
		 });
		 $("#BrandID").val($(this).val());
	});
//ส่วนของ function เพื่อเพิ่มข้อมูลจังหวัดเข้าไปก่อน
function Add(){
		$.ajax({
			  url: "data/getData.php",
			  global: false,
			  type: "GET",
			  data: ({TYPE : "Group"}),
			  dataType: "JSON",
			  async:false,
			  success: function(jd) {
							var opt="<option value=\"0\" selected=\"selected\">Group of Product</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["Group_ID"] +"'>"+val["Group_Name"]+"</option>"
    						});
							$("#Group").html( opt );
		   	  }
		});
}