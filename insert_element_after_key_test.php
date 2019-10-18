<?php

include('insert_element_after_key.php');

use PHPUnit\Framework\TestCase;
class injectAfterTest extends TestCase
{
    public function testInjectAfter()
    {
    	$array = ["foo" => 3, "bar" => 1];
		$afterKey = "foo";
		//$afterKey=null;
		$key = "buz";
		$value = 42;

		$result = injectAfter(array $array, string $afterKey, string $key, string $value);

		$this->assertIsArray($result);
		$this->assertArrayHasKey($key, $result);
    }
}
?>