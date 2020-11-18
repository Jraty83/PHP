<?php

class Tyrion extends Lannister {

	public function sleepWith($value) {
		if (get_class($value) == "Jaime")
			print("Not even if I'm drunk !" . PHP_EOL);
		if (get_class($value) == "Sansa")
			print("Let's do this." . PHP_EOL);
		if (get_class($value) == "Cersei")
			print("Not even if I'm drunk !" . PHP_EOL);
	}
}
?>
