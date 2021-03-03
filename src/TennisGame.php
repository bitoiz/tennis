<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{
 public $nombre1;
 public $nombre2;
 protected $resultado1;
 protected $resultado2;

    /**
     * TennisGame constructor.
     */
    public function __construct(string $Jugadoruno,string $jugadordos,int $nu1,int $nu2)
    {
       $this->nombre1= $Jugadoruno;
       $this->nombre2= $jugadordos;
       $this->resultado1= $nu1;
       $this->resultado2= $nu2;
    }

    public function getScore(){
        if($this->resultado1==0 && $this->resultado2==0){
            return "Love all";
        }
        if($this->resultado1==1 && $this->resultado2==0){
            return "Fifteen - Love";
        }
    }
}