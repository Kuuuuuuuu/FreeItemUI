<?php 

namespace FreeItem;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\Listener;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener{
	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onCommand(CommandSender $sender, Command $command, String $label, Array $args) : bool{
        switch($command->getName()){
            case "freeitems":
            $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
            $form = $api->createSimpleForm(function(Player $player, $data = null){
                $result = $data;
                if($result === null){
                    return true;
                }
                switch($result){
                    case 0:
						$player->sendTitle("§aComplete"); 
						$item = Item::get(256,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(257,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(267,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(292,0,1);
					 $player->getInventory()->addItem($item);
						break;
						case 1:
						$player->sendTitle("§aComplete"); 
						$item = Item::get(306,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(307,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(308,0,1);
					 $player->getInventory()->addItem($item);
					  $item = Item::get(309, 0,1);
					 $player->getInventory()->addItem($item);
						break;
						case 2:
						$player->sendTitle("§aComplete"); 
						$item = Item::get(320,0,32);
					 $player->getInventory()->addItem($item);
						break;
                }
            });
            $form->setTitle("§aFreeitem");
            $form->addButton("§c§lTools");
            $form->addButton("§a§lArmors");
            $form->addButton("§e§lFoods");
		    $form->sendToPlayer($sender);
            break;
        }
        return true;
    }
}