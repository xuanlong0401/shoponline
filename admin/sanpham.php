<link rel="stylesheet" href="css/hienthi_sp.css">
<script type="text/javascript" src="js/checkbox.js"></script>
<?php
	include ('../include/connect.php');
	
    $select = "select * from sanpham inner join danhmuc on sanpham.madm=danhmuc.madm";
    $query = mysqli_query($link,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ SẢN PHẨM</h3>
<a href='?admin=themsp' >Thêm sản phẩm</a><br>
	
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> sản phẩm</p>
	<form action="admin.php?admin=xulysp" method="post">
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
        <td>Hình ảnh & Tên sản phẩm </td>
        <td>Số lượng</td>
        <td>Đã bán</td>
        <td>Giá</td>
        <td>Danh mục</td>
        <td>Active</td>
    </tr>

    <?php 
		if(!isset($_GET['page'])){  
		$page = 1;  
		} else {  
		$page = $_GET['page'];  
		}  
		$max_results = 50;  
		$from = (($page * $max_results) - $max_results);  
		$sql = mysqli_query($link,"SELECT * FROM sanpham inner join danhmuc on sanpham.madm=danhmuc.madm ORDER by idsp DESC  LIMIT $from, $max_results"); 								
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr class='noidung_hienthi_sp'>
				<td class="masp_hienthi_sp"><input type="checkbox" name="id[]" class="item" class="checkbox" value="<?=$bien['idsp']?>"/></td>
                <td class="masp_hienthi_sp"><?php  echo $bien['idsp'] ?></td>
                <td class="img_hienthi_sp">
                    <img src="../img/uploads/<?php echo $bien['hinhanh'] ?>"  width='60' height='60'><br>
                    <h4><?php echo $bien['tensp'] ?></h4>
                </td>
				<td class="sl_hienthi_sp"><?php echo $bien['soluong'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['daban'] ?></td>
                <td class="gia_hienthi_sp"><?php echo number_format($bien['gia']).' VNÐ' ?></td>
                <td  class="madm_hienthi_sp">
					 
									<?=$bien['tendm'] ?>
				</td>
                <td class="active_hienthi_sp">
                    <a href='admin.php?admin=suasp&idsp=<?php echo $bien['idsp']  ?>'><img src="img/sua.png" title="Sửa"></a>
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
			
			$result=mysqli_query($link,"SELECT COUNT(*) as Num FROM sanpham");
			$total_results =mysqli_free_result($result);  			  
			$total_pages = ceil($total_results / $max_results);  			
			if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
			}  
			for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){  
				if($i>1) {
						echo "$i&nbsp;";  } 
				
			} else {  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
			}  
			if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?admin=hienthisp&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>";  		
		
	?>
	</div>
