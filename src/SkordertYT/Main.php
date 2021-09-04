<?php

namespace SkordertYT;

use pocketmine\event\Listener as PronixPvP;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements PronixPvP
{

public function onStartKb(EntityDamageEvent $e){
if($e instanceof EntityDamageByEntityEvent){
$damager = $e->getDamager();
$entity = $event->getEntity();
if($damager instanceof Player){
$event->setKnockback(0.46);
$entity->motionY += 1;
$entity->motionX = -1;
} 
}
}

}
