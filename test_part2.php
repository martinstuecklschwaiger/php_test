<?php

$seg = array(6, 2, 5, 5, 4,  
             5, 6, 3, 7, 6); 
  

function computeSegment($x) 
{ 
    global $seg; 
    if ($x == 0) 
        return $seg[0]; 
  
    $count = 0; 
  
    
    while ($x) 
    { 
        $count += $seg[$x % 10]; 
        $x = (int)$x / 10; 
    } 
  
    return $count; 
} 
  
function elementMinSegment($arr, $n) 
{ 
    
    $minseg = computeSegment($arr[0]); 
    $minindex = 0; 
  
    
    for ($i = 1; $i < $n; $i++) 
    { 
        $temp = computeSegment($arr[$i]); 
  
        
        if ($temp < $minseg) 
        { 
            $minseg = $temp; 
            $minindex = $i; 
        } 
    } 
  
    return $arr[$minindex]; 
} 
  
// Driver Code 
$arr = array (489, 206, 745, 123, 756); 
$n = sizeof($arr); 
echo elementMinSegment($arr, $n) ,"n";