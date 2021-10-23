<?php

namespace devl28107\IslandsX;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("Plugin Enabled");
    }
    
    public function onDisable(){
        $this->getLogger()->info("Plugin Disabled");
    }
}



