#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab2 = array("b", "a", "c");
$tab3 = array("a,,,,", "b", "c");
$tab4 = array("not", "is", "this", "sorted");
$tab5 = array("is", "sorted", "this");

// $tab[] = "What are we doing now ?"; // COMMENT OUT !!
if (ft_is_sort($tab))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
if (ft_is_sort($tab2))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
if (ft_is_sort($tab3))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
if (ft_is_sort($tab4))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
if (ft_is_sort($tab5))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
?>
