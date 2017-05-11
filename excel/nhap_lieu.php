<?php 
	include 'header.php';
?>	
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="/redirect" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Upload file CSV/Excel</legend>
						<div class="control-group">
							<div class="control-label">
								<label>Lãi xuất tiền gửi:</label>
							</div>
							<div class="controls">
								<input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="LXTG" id="file_TG" class="input-large">
							</div>
							<div class="control-label">
								<label>Lãi xuất tiền vay:</label>
							</div>
							<div class="controls">
								<input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="LXTV" id="file_TV" class="input-large">
							</div>
							<div class="control-label">
								<label>Tỷ giá:</label>
							</div>
							<div class="controls">
								<input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="TGIA" id="file_TGI" class="input-large">
							</div>
							<div class="control-label">
								<label>Chữ chạy dưới:</label>
							</div>
							<div class="controls">
								<textarea name="CHD" id="undertext" cols="30" rows="10"></textarea>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
	</div>

	</div>

	</body>
</html>