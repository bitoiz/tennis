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
    public function __construct(string $Jugadoruno,string $jugadordos)
    {
       $this->nombre1= $Jugadoruno;
       $this->nombre2= $Jugadoruno;
    }
}