<?php
include '../core/db.php';

$db   = new Database();
$khuvuc = $_GET['kvid'];
$data = $db->select('Quan', Array('kvid'=>$khuvuc) );
echo json_encode($data);
?>