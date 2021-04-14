<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\TennisGame;

final class TennisGameTest extends TestCase
{
    /**
     * @test
     */
    public function TestResultado_0_0(){
        $partido =new TennisGame("M","C");
        $result = $partido->getScore();
        $this->assertEquals("Love all", $result);
    }
    /**
     * @test
     */
    public function TestResultado_15_0(){
        $partido =new TennisGame("M","C",0,0);
        $partido->wonPoint("M");
        $result = $partido->getScore();
        $this->assertEquals("Fifteen - Love", $result);
    }

    /**
     * @test
     */
    public function TestResultado_15_15(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $result = $partido->getScore();
        $this->assertEquals("Fifteen all", $result);
    }
    /**
     * @test
     */
    public function TestResultado_30_15(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $result = $partido->getScore();
        $this->assertEquals("Thirty - Fifteen", $result);
    }

    /**
     * @test
     */
    public function TestResultado_30_30(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $result = $partido->getScore();
        $this->assertEquals("Thirty all", $result);
    }
    /**
     * @test
     */
    public function TestResultado_40_30(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $result = $partido->getScore();
        $this->assertEquals("Forty - Thirty", $result);
    }

    /**
     * @test
     */
    public function TestDeuce(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $result = $partido->getScore();
        $this->assertEquals("Deuce", $result);
    }
    /**
     * @test
     */
    public function TestVentaja1(){
        $partido =new TennisGame("M","C",3,3);
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $result = $partido->getScore();
        $this->assertEquals("Ventaja M", $result);
    }
    /**
     * @test
     */
    public function Consultarjugador1(){
        $partido =new TennisGame("M","C",1,0);
        $result = $partido->jugador1->getNombre();
        $this->assertEquals("M", $result);
    }
    /**
     * @test
     */
    public function Consultarjugador2(){
        $partido =new TennisGame("M","C",1,0);
        $result = $partido->jugador2->getNombre();
        $this->assertEquals("C", $result);
    }
    /**
     * @test
     */
    public function winplayer1(){
        $partido =new TennisGame("M","C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("C");
        $partido->wonPoint("M");
        $partido->wonPoint("M");
        $result = $partido->getScore();
        $this->assertEquals("Win M", $result);
    }

}
