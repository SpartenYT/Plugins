<?php

namespace StaffBroadcaster;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\Server;

class StaffBroadcaster extends PluginBase implements Listener{

public function onEnable(){

 $this->getServer()->getPluginManager()->registerEvents($this, $this);
  
  }

public function onJoin(PlayerJoinEvent $event){
 $staff = $event->getPlayer();
  if($staff->isOp()){
 $staff->getServer()->broadcastMessage("§6Él Staff§3".$staff->getName()."§6 esta Online!");
        }
    }
}