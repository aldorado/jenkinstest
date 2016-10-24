<?php

/*

     \                                 
    _ \    __ \   |   |   _` |   __|   
   ___ \   |   |  |   |  (   |  |      
 _/___|_\ _|  _| \__,_| \__,_| _|      
 \___ \   |   |   _` |   __|  _ \ _  / 
       |  |   |  (   |  |     __/   /  
 _____/  \__,_| \__,_| _|   \___| ___| 
                                       

*/
// Unique Key Code Generator - Anuar Suarez -2015

$codes = codeArrayGenerator();

function codeGenerator($codeLength = 16) {
	
	$availableChars = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$availableCharsLength = strlen($availableChars);
	$newCode = '';
	
	for($i = 0; $i < $codeLength; $i++) {
		$newCode .= $availableChars[rand(0, $availableCharsLength - 1)];
	}

	return $newCode;
}

function codeArrayGenerator($codeArraySize = 10, $codeLength = 16) {
	
	$codeArray = array();

	for($i = 0; $i < $codeArraySize;) {
		
		$newCode = codeGenerator($codeLength);

		if(!in_array($newCode, $codeArray)) {
			$codeArray[] = $newCode;
			$i++;
		}

	}

	return $codeArray;

}

foreach ($codes as $code):
echo $code;
?>
<br/>
<?php
endforeach;
?>