<?php

require_once('PHPExcel-develop/Classes/PHPExcel.php');
	function home_url(){
	  return sprintf(
	    "%s://%s%s",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME'],
	    $_SERVER['REQUEST_URI']
	  );
	}
	if(!function_exists('get_file_csv')){
		function get_file_csv($tmp_name,$beatifulname){
			$fullname = pathinfo($beatifulname);
			$filename = $fullname['filename'];
			$extension = $fullname['extension'];
			$newname = date('YmdHis',time()).'-'.$filename;
			$today = date("m-d-y");
			if (!file_exists('uploads/'.$today)) {
				    mkdir('uploads/'.$today, 0777, true);
				}
			if($extension == 'csv'){
    			move_uploaded_file($tmp_name,'uploads/'.$today.'/'.date('YmdHis',time()).'-'.$beatifulname);
				$file = fopen('uploads/'.$today.'/'.$beatifulname, "r");
			}else{
    			$excel_readers = array(
				    'Excel5' , 
				    'Excel2003XML' , 
				    'Excel2007'
				);
				$reader = $extension == 'xls' ? 'Excel5' : 'Excel2007';
				$reader = PHPExcel_IOFactory::createReader($reader);
				$reader->setReadDataOnly(true);
				$path = $tmp_name;
				$excel = $reader->load($path);
				$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
				$writer->save('uploads/'.$today.'/'.$newname.'.csv');
    			//move_uploaded_file($value['tmp_name'],'uploads/'.$newname.'.csv');
				$file = fopen('uploads/'.$today.'/'.$newname.'.csv', "r");
			}
				return $file;
		}
	}
	
?>