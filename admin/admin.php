<?php 
   session_start();
   if(!isset($_SESSION['username']) or ($_SESSION['phanquyen']==1))
   {	
		header('location:login.php');
		exit();
   }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="ckeditor/ckeditor.js"></script>
<title> Bánh Trung Hiếu </title>
<link rel="stylesheet" style="style/sheet" href="css/index.css">
<link
    href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner:wght@400;500;600&family=Lobster&display=swap"
    rel="stylesheet">
</head>
<?php 
	include("../include/connect.php");
?>
<body>
 <div id="wapper">
	<div id="header">
		<div id="lg-header">
		<a href="../index.php">logo</a>
		</div>
		<div id="bg-header">
			<br><br><h1>BÁNH TRUNG HIẾU</h1></br>
			<p style="text-align:center;font-family: 'Lobster';">Vì Sự Tin Dùng Của Khách Hàng</p>
		</div>
	</div> 
	<div id="content">
		<div id="top-content">
						<p>Chào bạn <font color="green"><b><u><?= $_SESSION['username']?></u></b></font><a href="logout.php"> | Thoát</a></p>
		</div>
		<div id="main-content">
			<div id="left-content">
				<div class="danhmucsp">
					<div class="center">
					<h4>Quản lý</h4>
						<ul>
							<li><a href="admin.php">Trang chủ</a></li>
							<li><a href="?admin=hienthisp"> Quản lý sản phẩm</a></li>
							<li><a href="?admin=hienthidm"> Quản lý danh mục</a></li>
							<li><a href="?admin=hienthihd"> Quản lý hóa đơn</a></li>
							<li><a href="?admin=hienthind"> Quản lý người dùng</a></li>
							<li><a href="?admin=hienthiht"> Quản lý hỗ trợ</a></li>
						</ul>
					</div>
				</div>	
			</div>
			<div id="center-content">
                <?php
                    include("content_admin.php");
                ?>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>
