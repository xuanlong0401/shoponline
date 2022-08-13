<link rel="stylesheet" href="css/hienthi_sp.css">
<?php
	include ('../include/connect.php');
	
    $select = "select * from nguoidung ";
    $query = mysqli_query($link,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ NGƯỜI DÙNG</h3>
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> người dùng</p>
</div>
<table>
    
    <tr class='tieude_hienthi_sp'>
        <td>ID</td>
        <td>Tên người dùng</td>
        <td>Username</td>
        <td>Email</td>
        <td>Điện thoại</td>
        <td>Quyền</td>
        <td style="width:80px;">Active</td>
    </tr>

    <?php
		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  
		$max_results = 10;  
		$from = (($page * $max_results) - $max_results);  
		$sql = mysqli_query($link,"SELECT * FROM nguoidung LIMIT $from, $max_results"); 							
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr class='noidung_hienthi_sp'>
                <td class="masp_hienthi_sp"><?php  echo $bien['idnd'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['tennd'] ?></td>
                <td class="img_hienthi_sp"> <?php echo $bien['username'] ?>  </td>
				<td class="sl_hienthi_sp"><?php echo $bien['email'] ?></td>
				<td class="sl_hienthi_sp">0<?php echo $bien['dienthoai'] ?></td>
				<td class="sl_hienthi_sp"><?php 
					if($bien['phanquyen']==0)
						echo "Administrator";
					else 
						echo "User";
					
				?></td>
                <td class="active_hienthi_sp">
                    <a href='?admin=suand&idnd=<?php echo $bien['idnd'] ?>'><img src="img/sua.png" title="Sửa"></a>
					<?php echo "<p onclick = 'checkdel({$bien['idnd'] })' ><img src='img/xoa.png' title='Xóa' class='delete'></p>" ?>
                </td>
            </tr>
<?php 
    }
	
    else echo "<tr><td colspan='6'>Không có khách hàng</td></tr>";
	
?>
</table>

	<div id="phantrang_sp">
	
	<?php
			$result=mysqli_query($link,"SELECT COUNT(*) as Num FROM nguoidung",0);
			$total_results =mysqli_free_result($result);  
			$total_pages = ceil($total_results / $max_results);  			
			if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthind&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
			}  
			for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){  
			echo "$i&nbsp;";  
			} else {  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthind&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
			}   
			if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthind&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>";  		
	?>
	</div>
<script language="JavaScript">
    function checkdel(idnd)
    {
        var	idnd=idnd;
        var link="xoa_nguoidung.php?idnd="+idnd;
        if(confirm("Bạn có chắc chắn muốn xóa người dùng này?")==true)
            window.open(link,"_self",1);
    }
</script>