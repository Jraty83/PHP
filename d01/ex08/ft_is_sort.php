<?php
	function ft_is_sort($arr) {
		$orig = $arr;
		sort($arr);
		$sorted = $arr;
		if ($orig == $sorted)
			return (1);
		else
			return (0);
	}
?>
