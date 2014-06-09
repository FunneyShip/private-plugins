<?php
/*
__PocketMine Plugin__
name=armor
description=touch boom you have armot
version=1
author=FunneyShip
class=Armor
apiversion=11,12,13
*/
class Armor implements Plugin{
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init()
    {
     
            $this->api->addHandler("player.touch.block", array($this, "EventHandler"));
            }
            
             public function EventHandler($data, $event)
    {
        switch($event)
        {
            case "player.touch.block":

                if($data["item"]->getID() == 57)
                {
      $data->setArmor(0,$this->getArmor(310));
      $data->setArmor(1,$this->getArmor(311));
      $data->setArmor(2,$this->getArmor(312));
      $data->setArmor(3,$this->getArmor(313));
                
                }
                  break;
                  
                  
                  case "player.touch.block":

                if($data["item"]->getID() == 41)
                {
      $data->setArmor(0,$this->getArmor(314));
      $data->setArmor(1,$this->getArmor(315));
      $data->setArmor(2,$this->getArmor(316));
      $data->setArmor(3,$this->getArmor(317));
                }
                  break;
                 

                  case "player.touch.block":

                if($data["item"]->getID() == 42)
                {
      $data->setArmor(0,$this->getArmor(306));
      $data->setArmor(1,$this->getArmor(307));
      $data->setArmor(2,$this->getArmor(308));
      $data->setArmor(3,$this->getArmor(309));
                }
            
                  break;
                  
        }
    }
                  
          public function __destruct(){
    }
                
}
