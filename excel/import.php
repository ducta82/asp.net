<?php
require 'db.php';
include 'core.php';
if(isset($_POST["Import"])){
		if(isset($_POST['CHD']) && $_POST['CHD'] !==''){
			$var = $_POST['CHD'];
			$query_count="select * from chu_chay_duoi";
			$query=mysqli_query($conn,$query_count);
			if(mysqli_num_rows($query) > 0){
				$sql_del_olddata = 'TRUNCATE chu_chay_duoi';
				mysqli_query($conn,$sql_del_olddata);
			}
           	$sql = "INSERT into chu_chay_duoi (`Name`) values('$var')";
           	$result = mysqli_query($conn,$sql );
			if(! $result )
			{
				echo "<script type=\"text/javascript\">
						alert(\"Upload chữ chạy dưới không thành công, xin thử lại.\");
						window.location = \"nhap_lieu.php\"
					</script>";
			}
		}
		foreach ($_FILES as $key => $value) {
			if($value["size"] > 0){
				if($key == 'LXTG' ) {
					$file = get_file_csv($value['tmp_name'],$value['name']);
					$query_count="select * from lai_suat_tg";
					$query=mysqli_query($conn,$query_count);
					if(mysqli_num_rows($query) > 0){
						$sql_del_olddata = 'TRUNCATE lai_suat_tg';
						mysqli_query($conn,$sql_del_olddata);
					}
			        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
		         	{
		         		if(is_numeric($emapData[0] )){
		         			//It wiil insert a row to our subject table from our csv file`
				           	$sql = "INSERT into lai_suat_tg (TT,Name,ShortName,Lai_suat,Loai_TG) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]')";
				         	//we are using mysql_query function. it returns a resource on true else False on error
				          	$result = mysqli_query($conn,$sql);
				          	//print_r("result tg =".$result);
							if(! $result ){
								echo "<script type=\"text/javascript\">
										alert(\"Upload lãi xuất tỷ giá không thành công, xin thử lại.\");
										window.location = \"nhap_lieu.php\"
									</script>";
							}	
		         		}
			        }
			         fclose($file);
			    } 
			    elseif($key == 'LXTV'){
					$file = get_file_csv($value['tmp_name'],$value['name']);
					$query_count="select * from lai_suat_tv";
					$query=mysqli_query($conn,$query_count);
					if(mysqli_num_rows($query) > 0){
						$sql_del_olddata = 'TRUNCATE lai_suat_tv';
						mysqli_query($conn,$sql_del_olddata);
					}
			         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
			         {//INSERT INTO lai_suat_tg (TT, Name, ShortName, Lai_suat, Loai_TG) VALUES (1,'hehe','hihi',20,2)
			     		print_r($emapData);
			         	if(is_numeric($emapData[0])){
					        $sql = "INSERT into lai_suat_tv (TT, Name, Lai_suat_tv) values ('$emapData[0]','$emapData[1]','$emapData[2]')";
					        $result1 = mysqli_query($conn,$sql);
			         		//print_r("result tv=".$result);
							/*if(! $result1 )
							{
								echo "<script type=\"text/javascript\">
										alert(\"Upload lãi xuất tiền vay không thành công, xin thử lại.\");
										window.location = \"nhap_lieu.php\"
									</script>";
							}*/
			         	}
			         }
			         fclose($file);
			    }       
				elseif($key == 'TGIA'){
					$file = get_file_csv($value['tmp_name'],$value['name']);
					$query_count="select * from ty_gia";
					$query=mysqli_query($conn,$query_count);
					if(mysqli_num_rows($query) > 0){
						$sql_del_olddata = 'TRUNCATE ty_gia';
						mysqli_query($conn,$sql_del_olddata);
					}
			         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
			         {
			         	if(is_numeric($emapData[0] )){
				          //It wiil insert a row to our subject table from our csv file`
				           $sql = "INSERT into 	ty_gia (TT, Name, Gia_mua,Gia_ban) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]')";
				         //we are using mysql_query function. it returns a resource on true else False on error
				          $result2 = mysqli_query($conn,$sql );
							if(! $result2 )
							{
								echo "<script type=\"text/javascript\">
										alert(\"Upload tỷ giá không thành công, xin thử lại.\");
										window.location = \"nhap_lieu.php\"
									</script>";
							}
			         	}
			         }
			         fclose($file);
				}
			}
		}
        //throws a message if data successfully imported to mysql database from excel file
        echo "<script type=\"text/javascript\">
					alert(\"CSV File has been successfully Imported.\");
					window.location = \"index.php\"
				</script>";
		//close of connection
		mysql_close($conn); 
	}
	
?>		 