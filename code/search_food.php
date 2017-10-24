<?php
	include 'core/db.php';
	$db = new Database();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Việt Nam" />
<meta property="og:url" content="http://nobiads.com/" />
<meta name="author" content="NOBI Việt Nam" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/css5.css">
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

<title>Radio Search</title>


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
		 $(div).css('bottom',((p)<start) ? '0px' : '');
    });
 
});
</script>
</head>
<body bgcolor="#FFFFFF" style="margin:auto;">

<div id="main">
 	<div id="head" style="background-image:url(image/banner.png);background-size:1340px 150px;background-repeat:no-repeat;"> 
	<img style="position:relative; left:50px;top:10px;" src="image/Tasty.png" />
    </div>
    <div id="head-link" style="background:#F63">
    	<div>
    		<a href="home.php"	> <img style="position:relative;top:5px;" src="image/nav-icon.png" /> </a>
        	<a href="home.php" style="font-size:21px;position:relative;top:3px;color:#FF0">
            	Khu Vực
            </a>
            <div class="hovergallery">
            	<a href="home.php"> <img style="border-radius:10%; position:relative;left:300px;top:-26px;" src="image/paint1_07.png" /></a>			</div>
        </div>
        <img style="position:relative;top:-23px;right:20px;"src="image/bg-content.png"/>
        <img style="position:relative;top:-25px;right:-380px;" src="image/bg-content.png" />
    </div>
    <div id = "left" >
    <p>
    	Kết Quả:
     </p>
    </div>
     <div id="content" style="position:absolute; left:350px;">
     
     	<?php
			$key = $_GET['food'];
        	$data = $db->select("select \"TenMon\" from \"KieuMon\" natural join \"Mon\" where \"TenKieuMon\"='$key'");
			foreach($data as $d){
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
            <div><p1 style="color:#F00;">Bản quyền ©2016 thuộc về <strong>Tasty!</trong> - Dịch vụ đặt món ăn uống trực tuyến, giao hàng tận nơi trên toàn quốc.</p1></div>
    </div>
    <div id="right">
      <a href="Page3_forest.html"><img style="position:absolute; right :10px;top:350px;" src="image/facebook.png" /></a>
      <a href="Page3_forest.html"><img style="position:absolute; right :10px;top:450px;" src="image/twitter.png" /></a>
      <a href="Page3_forest.html"><img style="position:absolute; right :10px;top:550px;" src="image/email.png" /></a>
    </div>
</div>
<script>
	$(".ListNhaHang").click(function(e){
		var nid = $(this).data("id");
		window.location = 'trangchonmon.php?nid='+nid;
	});
	
</script>

</body>
</html>

?>