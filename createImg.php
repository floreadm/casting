<?php
	$filename= $_POST[ 'fn' ];
	$imageDataBase64= $_POST[ 'imgData' ];
	
	$withoutHeaderData=substr( $imageDataBase64, strpos( $imageDataBase64, "," )+1 );
	$imageData=base64_decode( $withoutHeaderData );
 
    $fp = fopen( $filename.".png", 'wb' );
    fwrite( $fp, $imageData );
    fclose( $fp );

	// c2i - C2-Plugin script 1.0
?>