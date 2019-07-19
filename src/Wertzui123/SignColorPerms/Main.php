<?php

declare(strict_types=1);

namespace Wertzui123\SignColorPerms;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use Wertzui123\SignColorPerms\events\EventListener;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }

    public function checkColors($msg, Player $player){
        if($player->hasPermission("scp.color")){
            return $msg;
        }
        $string = str_replace(TextFormat::BLACK, '', $msg);
        $string = str_replace(TextFormat::DARK_BLUE, '', $string);
        $string = str_replace(TextFormat::DARK_GREEN, '', $string);
        $string = str_replace(TextFormat::DARK_AQUA, '', $string);
        $string = str_replace(TextFormat::DARK_RED, '', $string);
        $string = str_replace(TextFormat::DARK_PURPLE, '', $string);
        $string = str_replace(TextFormat::GOLD, '', $string);
        $string = str_replace(TextFormat::GRAY, '', $string);
        $string = str_replace(TextFormat::DARK_GRAY, '', $string);
        $string = str_replace(TextFormat::BLUE, '', $string);
        $string = str_replace(TextFormat::GREEN, '', $string);
        $string = str_replace(TextFormat::AQUA, '', $string);
        $string = str_replace(TextFormat::RED, '', $string);
        $string = str_replace(TextFormat::LIGHT_PURPLE, '', $string);
        $string = str_replace(TextFormat::YELLOW, '', $string);
        $string = str_replace(TextFormat::WHITE, '', $string);
        $string = str_replace(TextFormat::OBFUSCATED, '', $string);
        $string = str_replace(TextFormat::BOLD, '', $string);
        $string = str_replace(TextFormat::STRIKETHROUGH, '', $string);
        $string = str_replace(TextFormat::UNDERLINE, '', $string);
        $string = str_replace(TextFormat::ITALIC, '', $string);
        $string = str_replace(TextFormat::RESET, '', $string);
        return $string;
    }
}
