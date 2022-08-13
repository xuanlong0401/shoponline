﻿<link rel="stylesheet" href="css/hienthi_sp.css">
<script type="text/javascript" src="js/checkbox.js"></script>
<?php
	include ('../include/connect.php');
	
    $select = "select * from hotro ";
    $query = mysqli_query($link,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ HỖ TRỢ</h3>
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> tin</p>
	<form action="admin.php?admin=xulyht" method="post">
		<div id="check">
			<p>
				<input type="submit" name="xoa" value="Xóa" />
			</p>
		</div>
</div>
<table>
    <tr class='tieude_hienthi_sp'>
		
		<td width="30"><input type="checkbox" name="check"  class="checkbox" onclick="checkall('item', this)"></td>
        <td>ID</td>
        <td>Chủ đề</td>
        <td>Nội dung</td>
        <td>Tên</td>
        <td>Email</td>
    </tr>
    <?php
		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  
		$max_results = 10;  
		$from = (($page * $max_results) - $max_results);  
		$sql = mysqli_query($link,"SELECT * FROM hotro LIMIT $from, $max_results"); 					
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr class='noidung_hienthi_sp'>
				<td class="masp_hienthi_sp"><input type="checkbox" name="id[]" class="item" class="checkbox" value="<?=$bien['idht']?>"/></td>
                <td class="masp_hienthi_sp"><?php  echo $bien['idht'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['chude'] ?></td>
                <td class="img_hienthi_sp"> <?php echo $bien['noidung'] ?>  </td>
				<td class="sl_hienthi_sp"><?php echo $bien['hoten'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['email'] ?></td>
			</tr>
<?php 
    }
	
    else echo "<tr><td colspan='6'>Không có tin nào</td></tr>";
	
?>
</table>
</form>
	<div id="phantrang_sp">
	
	<?php
			$result=mysqli_query($link,"SELECT COUNT(*) as Num FROM hotro",0);
			$total_results =mysqli_free_result($result); 
			$total_pages = ceil($total_results / $max_results);  
			if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthiht&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
			}  

			for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){  
			echo "$i&nbsp;";  
			} else {  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthiht&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
			}   
			if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthiht&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>";  		
	?>
	</div>
<script language="JavaScript">
    function checkdel(idht)
    {
        var	idht=idht;
        if(confirm("Bạn có chắc chắn muốn xóa tin này?")==true)
            window.open(link,"_self",1);
    }
</script>