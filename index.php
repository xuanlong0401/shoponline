<base href="http://localhost/shoponline/" />
<?php 
session_start();
include("include/connect.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Bánh Trung Hiếu </title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" style="style/sheet" href="css/index.css">
<link
    href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner:wght@400;500;600&family=Lobster&display=swap"
    rel="stylesheet">
<link rel="stylesheet" style="style/sheet" href="slide/engine/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/pbs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="slide/engine/wowslider.js"></script>
<script type="text/javascript" src="slide/engine/wowslider.mod.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="js/newsScrollerDefault-rightToleft-bottomTotop.js" type="text/javascript"></script>
<script src="js/newsScrollerEdit-leftToright-topTobottom.js" type="text/javascript"></script>
<script type="text/javascript" src="js/zoom/cloud-zoom.1.0.2.js"></script>
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){

$('ul.tabs').each(function(){
var $active, $content, $links = $(this).find('a');
$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
$active.addClass('active');
$content = $($active.attr('href'));
$links.not($active).each(function () {
$($(this).attr('href')).hide();
});
$(this).on('click', 'a', function(e){
$active.removeClass('active');
$content.hide();
$active = $(this);
$content = $($(this).attr('href'));
$active.addClass('active');
$content.show();
e.preventDefault();
});
});
});
</script>
<link rel="stylesheet" style="style/sheet" href="css/style1.css">
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
											 	easing			: 'easeInOutExpo',
												duration		: 2000,
												auto		 	: true,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', 
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth:1000,
												buttons			: buttons} );	
	});
</script>
</head>
<body style="background:white">
<div id="wapper">
	<div id="header">
		<div id="lg-header">
		<a href="index.php">logo</a>
		</div>
		<div id="bg-header">
			<br><br><h1>BÁNH TRUNG HIẾU</h1></br>
			<p style="text-align:center;font-family: 'Lobster';">Vì Sự Tin Dùng Của Khách Hàng</p>	
		</div>
			<div id="menu-header">
			<?php include("home_include/menu_ngang.php"); ?>
			</div>
	</div>
	<div id="content">
		<div id="lofslidecontent45" class="lof-slidecontent" style="width:1000px; height:350px;">
			<div class="preload"><div></div></div>
				<div id="lof-main-outer">
					<ul class="lof-main-wapper">
						<li><img src="img/slide/slide.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide1.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide2.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide3.jpg" width="1000" height="350"></li>
						<li><img src="img/slide/slide4.jpg" width="1000" height="350"></li>
					</ul>
				</div>
				<div class="lof-navigator-wapper">

					<div onClick="return false" href="" class="lof-next">Next</div>
					  <div class="lof-navigator-outer">
							<ul class="lof-navigator">
								<li><img src="img/slide/slide.jpg" width="70" height="25" /></li>
							   <li><img src="img/slide/slide1.jpg" width="70" height="25" /></li>       		       		
							   <li><img src="img/slide/slide2.jpg" width="70" height="25" /></li>       		
							   <li><img src="img/slide/slide3.jpg" width="70" height="25" /></li>       		
							   <li><img src="img/slide/slide4.jpg" width="70" height="25" /></li>       		
							</ul>
					  </div>
					<div onClick="return false" href="" class="lof-previous">Previous</div>
				</div> 
		</div>
		<div id="main-content">
			<div id="left-content">
				<?php include("home_include/left_content.php");?>
			</div>
			<div id="center-content">
				<?php include("content_page.php"); ?>
			</div>
			<div id="right-content">
				<?php include("home_include/right_content.php"); ?>
			</div>
		</div>
	<div id="footer">
		<div id="menu-footer">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php">Về lại trang đầu</a></p>
		</div>
		<div id="bg-footer">
			<div id="noidungfooter">
				<div id="noidung">
					<ul>
						<li><strong>&copy;Địa chỉ: 637/2 Hà Huy Giáp, Thạnh Xuân Quận 12 TpHCM</li>
						<li><strong>&#9743;Điện thoại: 0932 622 268 – 0982 292 928</li>
						<li><strong>Website:&nbsp;<a href="index.php">http://banhtrunghieu.com</a></li>
					</ul>
				</div>
				<div id="thanhngang">
					<img src="img/thanhngang-footer.png">
				</div>
				<div id="copyright">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>