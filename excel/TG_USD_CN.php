<?php 
	include 'header.php';
?>	 
		<script type="text/javascript">
			  setInterval(function(){
				window.location = 'TG_USD_TC.php';
			  }, 30000);
		</script>	 
		<div class="container-fluid">
			<div class="row" style="margin-top:18px;">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="padding-left: 0;padding-right: 40px;">
					<div class="row" style="padding-top:18px;">
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<img src="<?php echo $base_url?>img/agribank.jpg" class="img-responsive" alt="Image">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="text-align: center;padding: 0;padding-left: 30px;">
							<h2 class="title-page">thông tin sản phẩm dịch vụ</h2>
							<h3 class="date"><a href="nhap_lieu.php">Ngày: </a><?php echo date('d/m/y');?><h3>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h3 class="table-name">LÃI SUẤT HUY ĐỘNG TIỀN GỬI <strong class="red">USD ĐỐI VỚI CÁ NHÂN</strong></h3>
						</div>
					</div>
					<div id="scrollup" class="table-responsive">
						<table class="table table-bordered TG_table">
							<thead>
								<tr style="color:White;background-color:#A55129;font-family:Arial;font-weight:bold;height:30px;">
									<th scope="col">STT</th>
									<th scope="col">Kỳ hạn</th>
									<th scope="col">Lãi suất năm</th>
									<th scope="col">Lãi suất tháng</th>
								</tr>
							</thead>
							<?php
								$SQLSELECT = "SELECT * FROM lai_suat_tg ORDER BY ID asc";
								$result_set =  mysqli_query($conn,$SQLSELECT);
								$i = 1;
								while($row = mysqli_fetch_array($result_set,MYSQLI_ASSOC))
								{
									if($row['Loai_TG'] == 3){

									$cls = $i%2 == 0 ? 'white' : 'yeallow';
									$LS_nam =number_format($row['Lai_suat']/12, 4, '.','') ;
									?>
									<tr class="<?php echo $cls;?>">
										<td><?php echo $i; ?></td>
										<td style="text-align: left;"><?php echo $row['Name']; ?></td>
										<td><?php echo $row['Lai_suat'].'%'; ?></td>
										<td><?php echo $LS_nam.'%'; ?></td>
									</tr>
									<?php $i++; }
								} ?>
						</table>
					</div>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-right: 0;padding-left: 13px;">
						<div class="col-lg-12 right-widget">
							<div class="table-responsive">
								<table class="table table-bordered TGUSD_table">
									<thead>
		                                <tr>
		                                    <td colspan="3">TỶ GIÁ VÀNG / NGOẠI TỆ</td>
		                                </tr>
		                                <tr class="title_TGUSD_table">
		                                    <td>LOẠI</td>
		                                    <td>TỶ GIÁ MUA</td>
		                                    <td>TỶ GIÁ BÁN</td>
		                                </tr>
									</thead>
									<tbody style="background: #99FF66;">
										<tr>
										<?php
											$SQLSELECT = "SELECT * FROM ty_gia";
											$result_ty_gia =  mysqli_query($conn,$SQLSELECT);
											$name = '';
											$Gia_mua = '';
											$Gia_ban = '';
											while($row = mysqli_fetch_array($result_ty_gia,MYSQLI_ASSOC))
											{
												$name .= $row['Name'].'</br>';
												$Gia_mua .= $row['Gia_mua'].'</br>';
												$Gia_ban .= $row['Gia_ban'].'</br>';
											?>
												
										<?php } ?>
												<td>
													<span>
														<marquee height="100%" direction="up" scrolldelay="300"><?php echo $name; ?></marquee>
													</span>
												</td>
												<td>
													<span>
														<marquee height="100%" direction="up" scrolldelay="300"><?php echo $Gia_mua; ?></marquee>
													</span>
												</td>
												<td>
													<span>
														<marquee height="100%" direction="up" scrolldelay="300"><?php echo $Gia_ban; ?></marquee>
													</span>
												</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-12 right-widget">
							<div class="table-responsive">
								<table class="table table-bordered LSTG_table">
									<thead>
		                                <tr>
		                                    <td colspan="4">LÃI SUẤT TIỀN GỬI</td>
		                                </tr>
		                                <tr class="title_TGUSD_table">
		                                    <td colspan="2">KỲ HẠN</td>
		                                    <td>VNĐ/NĂM</td>
		                                    <td>USD/NĂM</td>
		                                </tr>
									</thead>
									<tbody style="background: #99FF66;">
									<?php
										$SQLSELECT = "SELECT * FROM lai_suat_tg ORDER BY ID asc";
										$result_set =  mysqli_query($conn,$SQLSELECT);
										$i = 1;
										$ky_han = '';
										$LS_VND = '';
										$LS_USD = '';
										while($row = mysqli_fetch_array($result_set,MYSQLI_ASSOC))
										{
											$cls = $i%2 == 0 ? 'white' : 'yeallow';
											$LS_nam =number_format($row['Lai_suat']/12, 4, '.','') ;
											$loai_TG = $row['Loai_TG'];
											$VND = $loai_TG == 1 || $loai_TG == 2 ? $row['Lai_suat'].'%' : '----';
											$USD = $loai_TG == 3 || $loai_TG == 4 ? $row['Lai_suat'].'%' : '----';
											$ky_han .= $row['ShortName'].'</br>';
											$LS_VND .= $VND.'</br>';
											$LS_USD .= $USD.'</br>';
											$i++;} 
									?>
										<tr>
											<td colspan="2"><marquee height="300" direction="up" scrolldelay="300"><span><?php echo $ky_han; ?></marquee></span></td>
											<td><marquee height="300" direction="up" scrolldelay="300"><span><?php echo $LS_VND; ?></marquee></span></td>
											<td><marquee height="300" direction="up" scrolldelay="300"><span><?php echo $LS_USD; ?></marquee></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-12 right-widget">
							<div class="table-responsive">
								<table class="table table-bordered LSTV_table">
									<thead>
		                                <tr>
		                                    <td colspan="3">LÃI SUẤT TIỀN VAY</td>
		                                </tr>
		                                <tr class="title_TGUSD_table">
		                                    <td>LOẠI VAY</td>
		                                    <td>LÃI SUẤT/NĂM</td>
		                                </tr>
									</thead>
									<tbody style="background: #99FF66;">
										<tr>
										<?php
											$SQLSELECT = "SELECT * FROM lai_suat_tv";
											$result_lai_suat_tv =  mysqli_query($conn,$SQLSELECT);
											$name = '';
											$loai_vay = '';
											$lai_suat_nam = '';
											while($row = mysqli_fetch_array($result_lai_suat_tv,MYSQLI_ASSOC))
											{
												$loai_vay .= $row['Name'].'</br>';
												$lai_suat_nam .= $row['Lai_suat_tv'].'</br>';
											?>
												
										<?php } ?>
												<td><span><?php echo $loai_vay; ?></span></td>
												<td><span><?php echo $lai_suat_nam; ?></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="text-bottom">
					<span style="font-family:Tahoma;font-size: 16pt;line-height: 36px;">
					<marquee>
					<?php
								$SQLSELECT = "SELECT * FROM chu_chay_duoi";
								$result_text =  mysqli_query($conn,$SQLSELECT);
								while($row = mysqli_fetch_array($result_text,MYSQLI_ASSOC))
								{
									echo $row['Name'];
								} ?>
						</marquee>
					</span>
				</div>
			</div>
		</div>
	</body>
</html>
