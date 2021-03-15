<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\TennisGame;

final class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function Resultado_0_0(){
        $partido =new TennisGame("M","C",0,0);
        $result = $partido->getScore();
        $this->assertEquals("Love all", $result);
    }
    /**
     * @test
     */
    public function Resultado_15_0(){
        $partido =new TennisGame("M","C",1,0);
        $result = $partido->getScore();
        $this->assertEquals("Fifteen - Love", $result);
    }

    /**
     * @test
     */
    public function Resultado_15_15(){
        $partido =new TennisGame("M","C",1,1);
        $result = $partido->getScore();
        $this->assertEquals("Fifteen all", $result);
    }
    /**
     * @test
     */
    public function Resultado_30_15(){
        $partido =new TennisGame("M","C",2,1);
        $result = $partido->getScore();
        $this->assertEquals("Thirty - Fifteen", $result);
    }

    /**
     * @test
     */
    public function Resultado_30_30(){
        $partido =new TennisGame("M","C",2,2);
        $result = $partido->getScore();
        $this->assertEquals("Thirty all", $result);
    }
    /**
     * @test
     */
    public function Resultado_40_30(){
        $partido =new TennisGame("M","C",3,2);
        $result = $partido->getScore();
        $this->assertEquals("Forty - Thirty", $result);
    }

    /**
     * @test
     */
    public function Deuce(){
        $partido =new TennisGame("M","C",3,2);
        $result = $partido->getScore();
        $this->assertEquals("Deuce", $result);
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

}
