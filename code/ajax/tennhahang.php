<?php
	include '../core/db.php';
	$db =  new Database();
	$nhahang = $_GET['nid'];
	$data = $db->select('NhaHang', Array('nid'=>$nhahang));
	echo json_encode($data);
?>