<?php  
	$file = $_GET['file'] .".pdf"; 
	  
	// We will be outputting a PDF 
	// header('Content-Type: application/pdf'); 
	  
	// It will be called downloaded.pdf 
	header("content-disposition: attachment; filename=" .urlencode($file)); 

	$fb = fopen($file, "r");
	  
	while(!feof($fb)){
		echo fread($fb, 8192);
		flush();
	}
	   
	fclose($fb);
?> 