<?php 
include 'include/connect.php';
include 'admin/function/function.php';

if(isset($_POST['submit']))
{
	$tennd=$_POST['tennd'];
	$user=$_POST['user'];
	$pass=MD5($_POST['pass']);
	$email=$_POST['email'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	
		$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
	
	$insert="INSERT INTO nguoidung VALUES('','$tennd', '$user', '$pass','$ngaysinh','$gioitinh', '$email','$dienthoai', '$diachi','$ngay', '1')";
		$query=mysqli_query($link,$insert);
		if($query) {
		redirect("index.php", "Bạn đã đăng ký thành công.", 2 );
		}
			else { echo "Thất bại";
			}
}
?>