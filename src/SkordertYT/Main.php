<?php

namespace SkordertYT;

use pocketmine\event\Listener as PronixPvP;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\Player;

class Main extends PluginBase implements PronixPvP
{
  
  public function onStartKb(EntityDamageEvent $event)
  {
    if($e instanceof EntityDamageByEntityEvent){
      $damager = $event->getDamager();
      $entity = $event->getEntity();
      if($damager instanceof Player){
        $event->setKnockback(0.46);
        $entity->motionY += 1;
      }
    }
  }
}
