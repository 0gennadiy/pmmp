<?php

namespace danik;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemUseEvent;
use pocketmine\item\ItemIdentifier;




class daniksplugin extends  PluginBase implements Listener {


    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }
        

public function onUse(PlayerItemUseEvent $event): void{
    $item = $event -> getItem();
    $player = $event -> getPlayer();
    $itemid = $event->getItem()->getTypeId();
    $player -> sendMessage("You have used a(an) {$item}");
    $player->sendMessage("ID of this item: {$itemid}");

    }

}

?>