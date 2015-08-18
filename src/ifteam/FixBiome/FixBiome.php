<?php

namespace ifteam\FixBiome;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\level\ChunkLoadEvent;
use pocketmine\level\format\anvil\Anvil;

class FixBiome extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
	}
	public function onChunkLoadEvent(ChunkLoadEvent $event) {
		if ($event->getLevel () instanceof Anvil)
			return;
		for($x = 0; $x < 16; ++ $x)
			for($z = 0; $z < 16; ++ $z)
				$event->getChunk ()->setBiomeColor ( $x, $z, 133, 188, 86 );
	}
}

?>