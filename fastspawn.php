<?php

/*
__PocketMine Plugin__
name=fastspawn
description=that was FAST!!
version=0.0.1
author=FunneyShip
class=Spawn
apiversion=11,12,13
*/

class Spawn implements Plugin
{
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init()
    {
    $this->api->addHandler("player.respawn", array($this, "EventHandler"));
    $this->api->addHandler("player.equipment.change", array($this, "EventHandler"));
    }
    
     public function EventHandler($data, $event){
     switch($event)
     {
     case "player.equipment.change":
     if($data["item"]->getID() == $this->CONFIG["345"])
     {
      $this->api->console->run("spawn");
      }
      
      break;
      
      case "player.respawn":
      
       $this->api->console->run("give " . $issuer->username . "345" . "1 ");
      
      break;
      }
      }
     public function __destruct(){
     }
     }
