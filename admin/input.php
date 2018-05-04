 <?php   
 //upload.php  
 //echo 'done';  
 $output = '';  
 if(isset($_FILES['file']['name'][0]))  
 {  
      //echo 'OK';  
      foreach($_FILES['file']['name'] as $keys => $values)  
      {  
           if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'imgaes/products/' . $values))  
           {  
                $output .= '<div class=col-md-3"><img src="imgaes/products/'.$values.'" class="img-responsive" /></div>';  
           }  
      }  
 }  
 echo $output;  
 ?>  