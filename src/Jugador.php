<?php


namespace Deg540\PHPTestingBoilerplate;


class Jugador
{
    private $nombre;
    private $resultado;
    private $deuce;

    /**
     * Jugador constructor.
     * @param $nombre1
     * @param $resultado1
     * @param $deuce1
     */
    public function __construct($nombre1, $resultado1)
    {
        $this->nombre = $nombre1;
        $this->resultado = $resultado1;
        $this->deuce = 0;
    }

    /**
     * @return int
     */
    public function getDeuce(): int
    {
        return $this->deuce;
    }

    /**
     * @param int $deuce
     */
    public function setDeuce(int $deuce): void
    {
        $this->deuce = $deuce;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param mixed $resultado
     */
    public function setResultado($resultado): void
    {
        $this->resultado = $resultado;
    }

}