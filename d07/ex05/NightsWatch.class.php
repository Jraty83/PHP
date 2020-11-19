<?php

class NightsWatch {

	public function recruit($value) {
		if (get_class($value) == "JonSnow") {
			$print = new JonSnow();
			$print->fight();
		}
		if (get_class($value) == "MaesterAemon")
			return ;
		if (get_class($value) == "SamwellTarly") {
			$print = new SamwellTarly();
			$print->fight();
		}
	}

	public function fight() {
		return ;
	}
}
?>
