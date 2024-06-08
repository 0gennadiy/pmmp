<?php

namespace danik;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemUseEvent;
use pocketmine\player\Player;
use pocketmine\player\GameMode;



class daniksplugin extends  PluginBase implements Listener {


    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }
        

    public function onUse(PlayerItemUseEvent $event): void{
    $player = $event -> getPlayer();
    $itemid = $event->getItem()->getTypeId();
//    $player->sendMessage("ID of this item: {$itemid}");
    if ($itemid == 20220 && GameMode::CREATIVE == GameMode::CREATIVE) {
        $player->sendMessage("§eThese §awheat seeds §ehave changed your gamemode to §cSURVIVAL.");
        $player->setGamemode(GameMode::SURVIVAL); }
    elseif ($itemid == 20150 && GameMode::SURVIVAL == GameMode::SURVIVAL) { 
        $player->sendMessage("§eThese §cmelon seeds §ehave changed your gamemode to §9CREATIVE.");
        $player->setGamemode(GameMode::CREATIVE); }
    }
}
?>