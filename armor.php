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
     
            $this->api->addHandler("player.touch.block", array($this, "EventHandler1"));
            $this->api->addHandler("player.touch.block", array($this, "EventHandler2"));
            $this->api->addHandler("player.touch.block", array($this, "EventHandler3"));
    }
    
    public function EventHandler1($data, $event)
    
     if($data["item"]->getID() == 57)
                {
      $data->setArmor(0,$this->getArmor(310));
      $data->setArmor(1,$this->getArmor(311));
      $data->setArmor(2,$this->getArmor(312));
      $data->setArmor(3,$this->getArmor(313));
                
                }
                
         public function EventHandler2($data, $event)
         
         if($data["item"]->getID() == 41)
                {
      $data->setArmor(0,$this->getArmor(314));
      $data->setArmor(1,$this->getArmor(315));
      $data->setArmor(2,$this->getArmor(316));
      $data->setArmor(3,$this->getArmor(317));
                }
                
                public function EventHandler3($data, $event)
                
                if($data["item"]->getID() == 42)
                {
      $data->setArmor(0,$this->getArmor(314));
      $data->setArmor(1,$this->getArmor(315));
      $data->setArmor(2,$this->getArmor(316));
      $data->setArmor(3,$this->getArmor(317));
                }
         
          public function __destruct(){
    }
                
}
         
         
         
                
            
