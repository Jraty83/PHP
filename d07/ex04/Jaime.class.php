<?php

class Jaime extends Lannister {

	public function sleepWith($value) {
		if (get_class($value) == "Tyrion")
			print("Not even if I'm drunk !" . PHP_EOL);
		if (get_class($value) == "Sansa")
			print("Let's do this." . PHP_EOL);
		if (get_class($value) == "Cersei")
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
	}
}
?>
