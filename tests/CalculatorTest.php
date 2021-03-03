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
    public function Devuelv(){
        $partido =new TennisGame(M,C);
        $result = $partido->nombre1

        $this->assertEquals("M", $result);
    }
}
