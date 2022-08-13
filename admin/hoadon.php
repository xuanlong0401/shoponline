<link rel="stylesheet" href="css/hienthi_sp.css">
<script type="text/javascript" src="js/checkbox.js"></script>
<?php
	include ('../include/connect.php');
    $select = "select * from hoadon";
    $query = mysqli_query($link,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ HÓA ĐƠN</h3>
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> hóa đơn</p><br>
	<form action="admin.php?admin=xulyhd" method="post">
		<div id="check">
			<p>
				<input type="submit" name="giaohang" value="Đã giao hàng" />
				<input type="submit" name="huy" value="Hủy" />
				<input type="submit" name="xoa" value="Xóa" />

			</p>
		</div>
</div>
<table>
    <tr class='tieude_hienthi_sp'>
        <td width="30"><input type="checkbox" name="check"  class="checkbox" onclick="checkall('item', this)"></td>
        <td>Mã HD</td>
        <td>Họ Tên</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        <td>Email</td>
        <td>Trạng thái</td>
        <td colspan=2>Active</td>
    </tr>
    <?php
		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  
		$max_results = 10;  
		$from = (($page * $max_results) - $max_results);  
		$sql = mysqli_query($link,"SELECT * FROM hoadon ORDER by mahd DESC  LIMIT $from, $max_results"); 								
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr class='noidung_hienthi_sp'>
                <td class="masp_hienthi_sp"><input type="checkbox" name="id[]" class="item" class="checkbox" value="<?=$bien['mahd']?>"/></td>
                <td class="masp_hienthi_sp"><?php  echo $bien['mahd'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['hoten'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['diachi'] ?></td>
				<td class="sl_hienthi_sp">0<?php echo $bien['dienthoai'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['email'] ?></td>
				<td class="sl_hienthi_sp"><?php if($bien['trangthai']==1) echo "Đang xử lý"; else if($bien['trangthai']==2) echo"Đã giao hàng"; else echo"Đã hủy đơn hàng";?></td>
				<td class="active_hienthi_sp" style="width:70px;"><a href="admin.php?admin=chitiethoadon&mahd=<?php echo $bien['mahd']; ?> " style="float:left;">Chi tiết</a>
					
				</td>
            </tr>
<?php 
    }	
    else echo "<tr><td colspan='6'>Không có sản phẩm trong CSDL</td></tr>";	
?>
</table>
</form>
	<div id="phantrang_sp">	
	<?php
			
			$result=mysqli_query($link,"SELECT COUNT(*) as Num FROM hoadon",0);
			$total_results =mysqli_free_result($result); 		 
			$total_pages = ceil($total_results / $max_results);  
			if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthihd&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
			}  
			for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){  
			echo "$i&nbsp;";  
			} else {  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthihd&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
			}  
			if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthihd&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>";  		
		
	?>
	</div>
