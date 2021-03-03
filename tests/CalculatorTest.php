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
    public function DevuelvePrimerJugador(){
        $partido =new TennisGame("M","C");
        $result = $partido->nombre1;
        $this->assertEquals("M", $result);
    }
    /**
     * @test
     */
    public function DevuelveSegundoJugador(){
        $partido =new TennisGame("M","C");
        $result = $partido->nombre2;
        $this->assertEquals("C", $result);
    }
    /**
     * @test
     */
    public function Resultado_0_0(){
        $partido =new TennisGame("M","C");
        $result = $partido->getScore();
        $this->assertEquals("Love all", $result);
    }
}
