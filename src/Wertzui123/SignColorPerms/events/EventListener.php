<?php

declare(strict_types=1);

namespace Wertzui123\SignColorPerms\events;

use pocketmine\event\block\SignChangeEvent;
use Wertzui123\SignColorPerms\Main;
use pocketmine\event\Listener;

class EventListener implements Listener
{
    public $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

   public function onSignChange(SignChangeEvent $event){
        $player = $event->getPlayer();
        $null = $this->plugin->checkColors($event->getLine(0), $player);
        $one = $this->plugin->checkColors($event->getLine(1), $player);
        $two = $this->plugin->checkColors($event->getLine(2), $player);
        $three = $this->plugin->checkColors($event->getLine(3), $player);
        $event->setLine(0, $null);
        $event->setLine(1, $one);
        $event->setLine(2, $two);
        $event->setLine(3, $three);
   }
}