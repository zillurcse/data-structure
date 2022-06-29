<?php
// PHP program to implement linear
// search in unsorted array

// Function to implement
// search operation
function findElement($arr, $n, $key)
{
	$i;
	for ($i = 0; $i < $n; $i++)
		if ($arr[$i] == $key)
			return $i;

	return -1;
}

// Driver Code
$arr = array(12, 34, 10, 6, 40);
$n = sizeof($arr);

// Using a last element
// as search element
$key = 40;
$position = findElement($arr, $n, $key);

if ($position == - 1)
	echo("Element not found");
else
	echo("Element Found at Position: " . ($position + 1));
