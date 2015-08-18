<?php

namespace ifteam\FixBiome;

use pocketmine\scheduler\PluginTask;

class FixBiomeTask extends PluginTask {
	public function __construct(FixBiome $owner) {
		parent::__construct ( $owner );
	}
	public function onRun($currentTick) {
		$this->getOwner ()->tick ();
	}
}

?>