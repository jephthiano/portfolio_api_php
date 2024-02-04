<?php
$file_url = file_location('media_path','others/OLADEJO JEPHTHAH CV.pdf');
	if(file_exists($file_url)){
		header("Content-Description: File Transfer");
		header("Content-Type: application/octet-stream");
		header("Content-Control:no-cache,must-revalidate");
		header("Expires: 0");
		header("Content-Transfer-Encoding: Binary");
		header('Content-disposition: attachment;filename="'.basename($file_url).'"');
		flush(); //flush the system output buffer
		readfile($file_url);
		
	}else{
		server_error(404);
	}