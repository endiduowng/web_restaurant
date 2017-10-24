<?php
	include 'core/db.php';
	$db = new Database();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>
<meta property="og:type" content="website" />
<meta property="og:description" content="Việt Nam" />
<meta property="og:url" content="http://nobiads.com/" />
<meta name="author" content="NOBI Việt Nam" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/css4.css">

<title>Food</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
 
    var div = $('#right');
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
		 $(div).css('right',((p)>start) ? '0px' : '');
		
    });
 
});
</script>
<script>
$(document).ready(function() {
 
    var div = $('#left');
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
		 $(div).css('left',((p)>start) ? '0px' : '');
    });
 
});
</script>
</head>
<body style="margin:0 auto; position:absolute;">
	<div id="main">
    <div id="head">
    	<div id="menu">
  			<ul>
            	<img style="height:50px;width:150px;position:relative;top:15px;right:80px;" src="image/Tasty.png" />
    			<li><a href="home.php">HOME</a></li>
    			<li id="bg"><a href="home.php"><span style="color:#F60">RESTAURANT</span></a></li>
    			<li><a href="login.php">SIGN UP & SAVE</a></li>
  			</ul>
		</div>
        <img src="image/templatemo_footer.png" />
    </div>
    <div id="head-link">
        <img style="height:110px;position:relative;left:330px;width:1000px;" src="image/mon-an.png" />
        <div style="height:110px;width:330px;background:#CCC;position:relative;top:-141px;border-radius:-20%;"><a href="home.php"><p style="text-align:center;font-size:30px;position:relative;top:40px;">Thay đổi vị trí</p></a></div>
    </div>
    <div id="left">
    	<div style="background:#390;text-align:center;width:250px;height:50px;color:#FFF;">
        <p style="position:relative;top:10px;font-size:25px;"><strong>Thực đơn</strong></p></div>
        <div style="background:#FFF;text-align:center;width:250px;height:300px;border-radius:10%;">
        	<?php
            	$result = $db->select('KieuMon', Array('nid'=>$_GET['nid']));
				if(!$result){ echo "Error"; };
				foreach($result as $r){
			?>
        	<div><a href="#<?php echo $r['TenKieuMon'];?>"><p style="position:relative;top:10px;font-size:25px;"><?php echo $r['TenKieuMon'];?></p></a></div>
            
        <?php
				}
		?>
      </div>
    </div>
    <div id="content" style="position:absolute;left:258px;">
    	<div>
        <?php
            	$result = $db->select('KieuMon', Array('nid'=>$_GET['nid']));
				foreach($result as $r){
			?>
        	<a style="text-align:left;font-size:50px;color:#F60;" name="<?php echo $r['TenKieuMon'];?>"><p><?php echo $r['TenKieuMon'];?></p></a>
             <?php
            	$result1 = $db->select('Mon', Array('kmid'=>$r['kmid']));
				foreach($result1 as $r1){
			?>
            <img style="position:relative;top:-30px;" src="image/HE_box_border-top.jpg"/>
            <div class="hovergallery"><img style="width:80px;height:80px;position:relative;left:40px;top:20px;" src="image/food/<?php echo $r1['image'];?>.jpg" /></div>
            <div><p style="position:relative;color:#336;left:180px;top:-90px;font-size:20px"><strong><?php echo $r1['TenMon'];?></strong></p></div>
            <div><p style="position:relative;color:#336;left:180px;top:-90px;font-size:20px">Giá tiền : </p></div>
            <div><p style="position:relative;color:#F60;left:280px;top:-133px;font-size:20px"><?php echo $r1['Gia'];?> đồng</p></div>
          <a href="" class="orangebtvl" data-id="<?php echo $r1['mid']?>" data-name="<?php echo $r1['Ten mon']; ?>" data-price="<?php echo $r1['Gia']; ?>" style="position:relative;top:-200px;left:480px;">Đặt hàng</a>
           <?php
				}
			?>
              <?php
				}
		?>
        </div>
        	<div style="color:#F00;"><p1>Bản quyền ©2016 thuộc về <strong>Tasty!</strong> - Dịch vụ đặt món ăn uống trực tuyến, giao hàng tận nơi trên toàn quốc.</p1></div>
    </div>
    <div id="right">
    	<div style="background:#390;text-align:center;width:300px;height:50px;color:#FFF;">
        <p style="position:relative;top:10px;font-size:25px;"><strong>Đơn hàng của bạn</strong></p></div>
        <?php
        	$result = $db->select('NhaHang', Array('nid'=>$_GET['nid']));
			$r = $result[0];
			
		?>
        <div><img style="width:300px;height:100px;" src="image/restaurant/<?php echo $r['image'];?>.png" /></div>
        <div style="background:#CCC;width:300px;height:70px;">
        <p style="position:relative;top:6px;font-size:18px;color:#390;text-align:left">Đặt tối thiểu: </p>
        <div><p style="position:relative;top:-33px;font-size:18px;color:#F60;left:200px;"><?php echo $r['GiaTriDonHangToiThieu']?> đồng</p></div>
        <p style="position:relative;top:-40px;font-size:18px;color:#390;text-align:left">Phí vận chuyển: </p>
        <div><p style="position:relative;top:-78px;font-size:18px;color:#F60;left:200px;"><?php echo $r['PhiGiaoHang']?> đồng</p></div>
        </div>

        <div style="background:#FCF;width:300px;height:40px;">
        <p style="position:relative;top:10px;font-size:18px;color:#390;text-align:left">Tổng số tiền: </p>
       	<div id="total"><p style="position:relative;top:-30px;font-size:18px;color:#F60;left:200px;"><?php echo $r['PhiGiaoHang']?> đồng</p></div>
        </div>
        <div style="background:#FCF;width:300px;height:40px;">
        <p style="position:relative;top:10px;font-size:18px;color:#390;text-align:left">Số lượng món:</p>
       	<div id="num"><p style="position:relative;top:-30px;font-size:18px;color:#F60;left:200px;">0</p></div>
        </div>
        
        
       
        <button onclick="thanhtoan" style="width:300px;height:40px;position:relative;top:10px;font-size:24px;border:inset;color:#F60"><strong><a href="pay.php">Thanh toán đơn hàng</strong></a></button>
    </div>
</div>
<script>

$(".orangebtvl").click(function(e){
	e.preventDefault();
	var price = $(this).data('price');
	var total =  parseInt($("#total p").html());
	$("#total p").html((price+total)+' đồng');
	e.preventDefault();
	var pri = 1;
	var num = parseInt($("#num p").html());
	$("#num p").html((num + pri));
	
});

function thanhtoan(){
	var total = $("#total").val();
	window.location="pay.php";	
}



</script>
</body>
</html>
