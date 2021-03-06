<?php

	if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
	{
		// Get the data
		$imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
	
		// Remove the headers (data:,) part.  
		// A real application should use them according to needs such as to check image type
		$filteredData=substr($imageData, strpos($imageData, ",")+1);
	
		// Need to decode before saving since the data we received is already base64 encoded
		$unencodedData=base64_decode($filteredData);
	
		// Save file.  This example uses a hard coded filename for testing, 
	
		// but a real application can specify filename in POST variable
		
		$photo_name = substr($imageData, 0, strpos($imageData, "&"));
		
		$fp = fopen(  'photos/'.$photo_name, 'wb' );
	
		fwrite( $fp, $unencodedData);
	
		fclose( $fp );
	}

?>
