<php

namespace devl28107\IslandsX;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\Player;

class Main extends PluginBase {
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("Plugin Enabled");
    }
}

