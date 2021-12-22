<?php

namespace SkordertYT;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\Player;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener
{

  public function onDamage(EntityDamageEvent $event)
  {
    if($e instanceof EntityDamageByEntityEvent){
      $damager = $event->getDamager();
      $entity = $event->getEntity();
      if(!$entity instanceof Player)return;
      if(!$damager instanceof Player)return;
      $f = sqrt($entity->getX() * $entity->getX());
      if($f <= 0){
	return;
      }
      $motion = clone $entity->getMotion();
      $motion->y /= 2;
      $motion->y += $f * 0.392;
      if($motion->y > 0.392){
          $motion->y = 0.392;
      }
      $entity->setMotion($motion);
    }
  }
}
