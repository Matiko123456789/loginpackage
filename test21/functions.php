<<?php 

/**
 * 
 */
class MatikoValidator
{

	public function test_input($data){
	    $data = trim($data);
	    $data = stripcslashes($data);
	    $data = htmlspecialchars($data);
	    $data = mysqli_escape_real_string($data);
	    return $data;
 	}
}

 ?>