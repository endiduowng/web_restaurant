<?php
	include 'core/db.php';
	include 'core/users.php';
	if($user->isLogged()){ header("Location: home.php"); die(); };
	if(isset($_POST['Username']) && isset($_POST['password'])){
		$result = $user->login($_POST['Username'], $_POST['password']);
		if($result){ 
			if($_POST['Username']=="admin"){ header ("Location: admin.php");}
			else{
			header("Location: home.php"); die(); };}
		}
		
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in</title>
<link rel="stylesheet" type="text/css" href="css/css2.css"/>
</head>

<body>
<div id="main">
    <div id="head">
    	<div id="menu">
  			<ul>
            	<img style="height:50px;width:150px;position:relative;top:15px;right:80px;" src="image/Tasty.png" />
    			<li><a href="home.php">HOME</a></li>
    			<li><a href="home.php">RESTAURANT</a></li>
    			<li  id="bg"><a href="login.php"><span style="color:#F60">SIGN UP & SAVE</span></a></li>
  			</ul>
		</div>
        <img src="image/templatemo_footer.png" />
    </div>
    <div id="left" style="position:relative;top:60px;">
    	<h1 style="position:relative;left:80px;top:5px;">Đăng nhập hệ thống</h1>
        <img style="position:relative;left:80px;top:-10px" src="image/HE_box_border-top.jpg" />
        <p style="position:relative;left:80px;top:-10px"><strong>Username</strong></p>
        <form style="position:relative;left:80px;top:-10px"  method="post">
    	<input type="text" class="tb10" name="Username">
        <h2 style="font-size:17px;"><strong>Mật khẩu</strong></h2>
    	<input type="password" class="tb10" name="password">
        <label style="position:relative;top:45px;left:-320px;"><input type="checkbox" name="Note" />Lưu thông tin đăng nhập ?</label>
        <button type="submit" class="button" style="position:relative;top:45px;">Đăng nhập</button>
        </form>
        <div> <a href="#"><h3 style="position:relative;left:80px;top:45px;font-size:14px;color:#666;">Quên mật khẩu ?</h3></a></div>
    </div>
    <div id="content" style="position:relative;top:60px;">
    	<img src="image/back-body.png" />
        <img style="position:relative;top:-160px;" src="image/back-body.png" />
    </div>
    <div id="right" style="position:relative;top:60px;">
    	<h4 style="position:relative;left:80px;top:-10px;font-size:30px">Đăng kí thành viên</h4>
        <img style="position:relative;left:80px;top:-42px" src="image/HE_box_border-top.jpg" />
        <p style="position:relative;left:80px;top:-40px"><strong>Họ tên</strong></p>
        <form style="position:relative;left:80px;top:-40px" method="post">
    	<input type="text" class="tb10" name="hoten">
        <h5 style="font-size:17px;position:relative;top:-15px;"><strong>Điện thoại</strong></h5>
    	<input type="number" class="tb10" style="position:relative;top:-25px;" name="sodienthoai">
        <h6 style="font-size:17px;position:relative;top:-55px;"><strong>Email</strong></h6>
        <input type="email" class="tb10" style="position:relative;top:-75px;left:0px;" name="email">
        <div style="font-size:15px;position:relative;top:-60px;left:0px;font-family:Tahoma, Geneva, sans-serif;color:#666"><h7>Bằng việc đăng kí,tôi đồng ý với điều khoản sử dụng của trang web</h7></div>
		<button type="submit" class="button" style="position:relative;top:-45px;">Đăng ký</button>       
        </form>
    </div>
    <div id="footer" style="background:#CCC;">
    <div style="color:#F00;font-size:15px; position:relative; right:-80px;top:14px;">
    <p1>Bản quyền ©2016 thuộc về <strong>Tasty!</strong> - Dịch vụ đặt món ăn uống trực tuyến, giao hàng tận nơi trên toàn quốc.</p1>
    </div>
    <div style="color:#F00;font-size:15px; position:relative; right:-80px;top:24px;">
    <p2>Địa chỉ: Hedspi-k59/team Dương - Lâm - Diệp - Đài/Đại học Bách Khoa Hà Nội. </p2>
    </div>
    <div  style="color:#F00;font-size:15px; position:relative; right:-80px;top:34px;">
    <p3>Tel: (+84.8) 6268 0630. HOTLINE: 0932734515. Fax: (+84.8) 6268 0615 </p3>
    </div>
    </div>
</div>
</body>
</html>