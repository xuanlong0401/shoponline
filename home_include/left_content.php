<div id="danhmucsp">
					<div class="center">
					<h4>BÁNH NGỌT</h4>
					<?php 
					   $sql="select * from danhmuc where dequi=1";
					   $result=mysqli_query($link,$sql);
					?>
						<ul>
						<?php 
						   while($row=mysqli_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
							
						</ul>
					</div>
				</div>	
				
				<div id="banh">
					<div class="center">
						<h4>CÁC LOẠI CHẢ</h4>
						<?php 
					   $sql="select * from danhmuc where dequi=2";
					   $result=mysqli_query($link,$sql);
					?>
						<ul>
						<?php 
						   while($row=mysqli_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
						</ul>
					</div> 
				</div> 	
				
				<div id="quangcao1">
					<div class="center">
						<a href="#"> <img src="img/quangcao1.jpg" alt="quangcao1" title="quangcao1" width="188" height="150"></a>
						<a href="#"> <img src="img/quangcao2.jpg" alt="quangcao2" title="quangcao2" width="188" height="150"></a>
						<a href="#"> <img src="img/quangcao.jpg" alt="quangcao" title="quangcao" width="188" height="150"></a>
					</div><!-- End .center -->
				</div><!-- End .quangcao1 -->