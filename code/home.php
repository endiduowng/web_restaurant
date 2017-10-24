<?php
include 'core/db.php';
include 'core/users.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/css.css"/>
<script type="text/javascript" src="jquery/jquery-1.10.2.min.js"></script>
</head>

<body>
	<div class="wrapper">
    	<div class="header">
        	<a style="color:#FF0; font-size:30px; margin-left:100px">My Restaurant</a>
         	<a style="margin-left:400px"><img src="images/phone1.png" width="28" height="26"/></a>
            <a style="font:bold; color:#FFF; font-size:24px; font-family:Tahoma, Geneva, sans-serif">0965.372.983(7h - 23h)</a>
            <a style="margin-left:100px"><img src="images/contacts.png" width="30" height="27"/></a>
            <a style="color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:24px" href="login.php">
            <?php
			 $person = $user->isLogged();
			 if(!$person){ 
			 	echo "Khách";
			 }else{ echo $person['HoTen']; };
     
			?>
            
            </a>
        </div>
  	<div class="content">
        <div class="title">
            <h3>Chọn nơi mà bạn muốn ăn?</h3>
       	</div>
        <div class="select">
  
   		<form action="restaurant.php" id="search">
        <select name="khuvuc"  required style="width:400px; height:60px; margin-top:30px; font-size:30px; border-radius:5px; padding:10px">
        <option disable>Chọn</option>
            	<?php
				    $database = new Database();
					$result = $database->select('KhuVuc');
					foreach($result as $d)
					{
						echo '<option value="'.$d['kvid'].'">'.$d['TenKhuVuc'].'</option>';
					}
				?>
        </select>
        
            <select   required  name="quan" style="width:400px; height:60px; margin-top:30px; font-size:30px; border-radius:5px; padding:10px">
            </select>
          
        </div>
        <div class="search">
        	
        	<input style="width:400px; height:60px; color:#FFF; margin-top:40px;background-color:#F00; border-radius:10px; font-family:'Times New Roman', Times, serif, italic bold; font-size:30px;" type="submit" value="Tìm nhà hàng"/>
            
        </div>
        </form>
	</div>
    <div class="step"></div>
  	<div class="footer"></div>
    </div>
    <script>
	
	
	
	
	$("#search select[name=khuvuc]").change(function(e){
			
		var onSelect = function(name)
		{
			$("#search select[name=quan]").html("<option disable>Chọn</option>");
			for(var item of name)
			{
			   $('#search select[name=quan]').append($('<option>', {    value: item.qid,       text: item.TenQuan        }));
			};
			
		}
		$.get('ajax/ten-quan.php', {kvid: $("#search select[name=khuvuc]").val()}, onSelect, 'json');
		
	});
	
	
    </script>
   
</body>
</html>