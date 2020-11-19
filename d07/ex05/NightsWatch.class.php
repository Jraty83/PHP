<?php

Class NightsWatch
{
	public $fighters = array();
	public function recruit($value) {
		if ($value instanceof IFighter)
			$this->fighters[] = $value;
	}

	public function fight() {
		foreach ($this->fighters as $letsgo)
			$letsgo->fight();
	}
}
?>
