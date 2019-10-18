<?php


	$array = ["foo" => 3, "bar" => 1];
	$afterKey = "foo";
	//$afterKey=null;
	$key = "buz";
	$value = 42;


	function injectAfter( array $array, string $afterKey, string $key, string $value ) {
		if (array_key_exists($key, $array)) {
	        $array[$key] = $value;
	    }

		$new = [$key => $value];
		$keys = array_keys( $array );
		$index = array_search( $afterKey, $keys );
		$pos = false === $index ? count( $array ) : $index + 1;
		return array_merge( array_slice( $array, 0, $pos ), $new, array_slice( $array, $pos ));
	}

	echo "<pre />";
	print_r(injectAfter($array, $afterKey, $key, $value));

 

?>