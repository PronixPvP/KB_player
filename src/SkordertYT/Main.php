<?php

namespace SkordertYT;

use pocketmine\event\Listener as PronixPvP;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\Player;
use pocketmine\math\Vector3;

class Main extends PluginBase implements PronixPvP
{
  
  public function onStartKb(EntityDamageEvent $event)
  {
    if($e instanceof EntityDamageByEntityEvent){
      $damager = $event->getDamager();
      $entity = $event->getEntity();
      if($damager instanceof Player){
        $event->setKnockback(0.45);
	$event->setMotionNull(new Vector3(null, 0.5, null));
        $entity->motionY += 1;
      }
    }
  }
}
