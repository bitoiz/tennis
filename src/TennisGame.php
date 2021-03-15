<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{
 public $nombre1;
 public $nombre2;
 protected $resultado1;
 protected $resultado2;
 protected $deuce1;
 protected $deuce2;

    /**
     * TennisGame constructor.
     */
    public function __construct(string $Jugadoruno,string $jugadordos,int $nu1,int $nu2,int $num1,int $num2)
    {
       $this->nombre1= $Jugadoruno;
       $this->nombre2= $jugadordos;
       $this->resultado1= $nu1;
       $this->resultado2= $nu2;
       $this->deuce1= $num1;
       $this->deuce2= $num2;
    }

    public function getScore(){
        if($this->resultado1==0 && $this->resultado2==0){
            return "Love all";
        }
        if($this->resultado1==1 && $this->resultado2==0){
            return "Fifteen - Love";
        }
        if($this->resultado1==1 && $this->resultado2==1){
            return "Fifteen all";
        }
        if($this->resultado1==2 && $this->resultado2==1){
            return "Thirty - Fifteen";
        }
        if($this->resultado1==2 && $this->resultado2==2){
            return "Thirty all";
        }
        if($this->resultado1==3 && $this->resultado2==2){
            return "Forty - Thirty";
        }
        if($this->resultado1==3 && $this->resultado2==3 && $this->deuce1==1){
            return "Ventaja";
        }
        if($this->resultado1==3 && $this->resultado2==3){
            return "Deuce";
        }

    }

    public function TraductorPunto(int $numero):string
    {
        if ($numero==1){
            return "Fifteen";
        }
        if ($numero==2){
            return "Thirty";
        }
        if ($numero==1){
            return "Forty";
        }

    }
}