<?php
include '../database.php';
$id = $_POST['id'];
$name = $_POST['ten'];
$dienthoai = $_POST['dt'];
$dc = $_POST['diachi'];
$no = $_POST['no'];
$sql = "update nhacungcap set name = '$name', dienthoai = '$dienthoai', diachi = '$dc', sonodu = $no where id = $id";
mysqli_query($conn,$sql);
echo "Cập nhật nhà cung cấp thành công";
?>