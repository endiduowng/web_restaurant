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

<title>Restaurant</title>


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
            	<?php
                	$khuvuc = $db->select('KhuVuc', Array('kvid' => $_GET['khuvuc']));
					$tenKV = $khuvuc[0]['TenKhuVuc'];
					$quan = $db->select('Quan', Array('qid' => $_GET['quan']));
					$tenQuan = $quan[0]['TenQuan'];
					echo "$tenKV/$tenQuan";
				?>
            </a>
            <div class="hovergallery">
            	<a href="home.php"> <img style="border-radius:10%; position:relative;left:300px;top:-26px;" src="image/paint1_07.png" /></a>			</div>
        </div>
        <img style="position:relative;top:-23px;right:20px;"src="image/bg-content.png"/>
        <img style="position:relative;top:-25px;right:-380px;" src="image/bg-content.png" />
    </div>
    
    <div id = "left" >
    <p>
    	<div style="position:relative;left:5px;top:10px">
    		<form id="searchbox" method="get" action="search.php" autocomplete="off">
				<input name="q" type="text" size="15" placeholder="Chọn nhà hàng..." />
                <input type="hidden" name="qid" value="<?php echo $tenQuan;?>"/>
                <input type="hidden" name="kvid" value="<?php echo $tenKV;?>"/>
				<input id="button-submit" type="submit" value=" "/>
			</form>
        </div>
        <div>
        <h2 style="color:#09F;position:relative;top:10px;">Sắp xếp theo :</h2>
        	<div class="row">
        		<form id="sort" action="radio_button_search.php" style="font-size:20px" name="<?php echo $tenQuan ?>" method="get">
                <input type="hidden" name="khuvuc" value="<?php echo $_GET['khuvuc']; ?>"/>
                <input type="hidden" name="quan" value="<?php echo $_GET['quan']; ?>"/>
                <input type="radio" name="sort" value="GiaTriDonHangToiThieu">Giá trị đơn hàng tối thiểu<br/>
                <input type="radio" name="sort" value="PhiGiaoHang" >Phí giao hàng<br/>
                <input type="radio" name="sort" value="ThoiGianGiaoHang" >Giao hàng nhanh nhất<br/>
                </form>
            </div>
        </div>
     </p>
    </div>
    
     <div id="content" style="position:absolute; left:350px;">
     
     	<?php
        	$data = $db->select('NhaHang', Array('qid'=> $_GET['quan']));
			foreach($data as $d){
		?>		
    		
            <div class="ListNhaHang" data-id="<?php echo $d['nid'];?>">
            	<img style="width:900px;position:relative;top:20px;" src="image/1_11.png" />
                <div class="hovergallery"><img style="width:150px;height:150px;position:relative;top:35px;" src="image/restaurant/<?php echo $d['image'];?>.png" /></div>
                <h7 style="font-size:25px;position:relative;top:-90px;left:200px;"><strong><?php echo $d['TenNhaHang'];?></strong></h7>
                <div style="font-size:15px;position:relative;top:-39px;left:250px;"><strong><?php echo $d['ThoiGianGiaoHang'];?> phút</strong></div>
                <h10  style="font-size:15px;position:relative;top:-57px;left:170px;">Thời gian : </h10>
                <h10  style="font-size:15px;position:relative;top:-55px;left:260px;">Đặt tối thiểu:</h10>
                <div style="font-size:15px;position:relative;top:-73px;left:430px;"><strong><?php echo $d['GiaTriDonHangToiThieu'];?> đồng</strong></div>
                <h11  style="font-size:15px;position:relative;top:-89px;left:550px;">Phí vận chuyển:</h11>
                <div style="font-size:15px;position:relative;top:-106px;left:667px;"><strong><?php echo $d['PhiGiaoHang'];?> đồng</strong></div>
               	<img class="NhaHang" style="position:relative;left:650px;top:-196px;width:150px;height:40px" src="image/1_18.png" />
            </div>
            
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
		window.location = 'food.php?nid='+nid;
	});
	
</script>
<script>
$("#sort input[type=radio]").click(function(e){ 
	$("#sort").submit();
});
<?php
if(isset($_GET['sort']))
{
?>
$("#sort input[type='radio'][value='<?php echo $_GET['sort']; ?>']").prop('checked', true);
<?php }; ?>



</script>
</body>
</html>
