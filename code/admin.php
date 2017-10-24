<?php
	include 'core/db.php';
	include 'core/users.php';
	$db = new Database();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Việt Nam" />
<meta property="og:url" content="http://nobiads.com/" />
<meta name="author" content="NOBI Việt Nam" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/css6.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>

</head>
<body>
<div id="main">
    <div id="head">
    	<div><p style="color:#FFF;font-size:15px;position:relative;right:-1050px;top:-8px;">Chào <strong>Adminstrator</strong> | </p>
        <a href="home.php" class="logout"  style="color:#FFF;font-size:15px;position:relative;right:-1200px;top:-40px;">Đăng xuất</a>
        </div>
    </div>
 	<div id="head-link">
    	<p style="color:#FFF;font-size:40px;position:relative;top:-16px;left:30px;"><strong>Admin</strong>Panel</p>
    </div>   
    <div id="left">
    	<div style="width:350px;height:60px;background:#CCC;position:relative;top:-30px;"><p style="text-align:center;font-size:30px;position:relative;top:10px;">Chức năng</p></div>
    	<div id="menu" style="position:relative;top:-46px;font-size:20px;">
 			<ul>
 				<li><a href="#Quản lý nhà hàng"><strong>Quản lý nhà hàng</strong></a></li>
 				<li><a href="#Quản lý kiểu món"><strong>Quản Lý kiểu món</strong></a></li>
 				<li><a href="#Quản lý món ăn"><strong>Quản lý món ăn</strong></a></li>
 			</ul>
		</div>
    </div>
    <div id="content">
    	<div>
    	<a style="text-align:left;font-size:30px;" name="Quản lý nhà hàng"><p><strong>Quản lý nhà hàng</strong></p></a>
        <img src="image/bg-content.png" />
        <div style="position:relative; left:50px;">
        <form action="#" method="get">
        <p style="font-size:20px;">Nhập tên nhà hàng:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên nhà hàng" required="required"></div>
        <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:200px;">Xóa nhà hàng</button>
        </form>
         <form action="#">
         <p style="font-size:20px;">Nhập tên nhà hàng:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên nhà hàng" required="required"></div>
        <p style="font-size:20px;">Giá trị đơn hàng tối thiểu:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Giá trị đơn hàng tối thiểu" required="required"></div>
        <p style="font-size:20px;">Thời gian giao hàng:</p>
         <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Thời gian giao hàng" required="required"></div>
        <p style="font-size:20px;">Phí giao hàng:</p>
         <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Phí giao hàng" required="required"></div>
          <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:200px;">Thêm nhà hàng</button>
        </form>
        </div>
        </div>
        <div>
    	<a style="text-align:left;font-size:30px;" name="Quản lý kiểu món"><p><strong>Quản lý kiểu món</strong></p></a>
        <img src="image/bg-content.png" />
        <div style="position:relative; left:50px;">
        <form action="#">
        <p style="font-size:20px;">Nhập tên kiểu món:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên kiểu món" required="required"></div>
        <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:200px;">Thêm kiểu món</button>
        <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:300px;">Xóa kiểu món</button>
        </form>
        </div>
        </div>
        <div>
    	<a style="text-align:left;font-size:30px;" name="Quản lý món ăn"><p><strong>Quản lý món ăn</strong></p></a>
        <img src="image/bg-content.png" />
        <div style="position:relative; left:50px;">
        <form action="#">
        <p style="font-size:20px;">Nhập tên món ăn:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên món ăn" required="required"></div>
        <p style="font-size:20px;">Nhà hàng có món đó:</p>
         <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên nhà hàng" required="required"></div>
        <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:200px;">Xóa món ăn</button>
        </form>
         <form action="#">
         <p style="font-size:20px;">Nhập tên món ăn:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên món ăn" required="required"></div>
        <p style="font-size:20px;">Nhập tên kiểu món:</p>
        <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên kiểu món" required="required"></div>
        <p style="font-size:20px;">Nhà hàng có món đó:</p>
         <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Tên nhà hàng" required="required"></div>
          <p style="font-size:20px;">Giá tiền:</p>
         <div style="position:relative;left:250px;top:-45px;"><input type="text" class="tb10"  name="Giá tiền" required="required"></div>
          <button type="submit" class="button" style="position:relative;top:-20px;width:160px;height:40px;left:200px;">Thêm món ăn</button>
        </form>
        </div>
        </div>
    </div>
    <div id="footer">
    	<div style="text-align:center;color:#666;position:relative;top:20px;"><p1>Bản quyền ©2016 thuộc về <strong>Tasty!</strong> - Dịch vụ đặt món ăn uống trực tuyến, giao hàng tận nơi trên toàn quốc.</p1></div>
    </div>
</div>

<script>
	$(".logout").click(function(e){
		<?php
			$user->logout();
		?>
	});
	$(".button").click(function(e){
		<?php
			$key = $_GET['Tên nhà hàng'];
			echo $key;
			$db->del('NhaHang', Array('TenNhaHang'=>$key));
		?>	
	}
</script>
</body>
</html>
