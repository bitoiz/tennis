<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{
 public Jugador $jugador1;
 public Jugador $jugador2;

    /**
     * TennisGame constructor.
     */
    public function __construct(string $Jugadoruno,string $jugadordos)
    {;
       $this->jugador1= new Jugador($Jugadoruno);
       $this->jugador2= new Jugador($jugadordos);

    }

    public function getScore(){
        $puntuacion1=$this->TraductorPunto($this->jugador1->getResultado());
        $puntuacion2=$this->TraductorPunto($this->jugador2->getResultado());
        $Resultado="";

        if($puntuacion1 == "Win"){
            $Resultado="" . $puntuacion1 ." ". $this->jugador1->getNombre();
            return $Resultado;
        }
        if($puntuacion2 == "Win"){
            $Resultado="" . $puntuacion2 ." ". $this->jugador2->getNombre();
            return $Resultado;
        }
        if($puntuacion1 != $puntuacion2){
            $Resultado=$Resultado . $puntuacion1 . " - " . $puntuacion2;
        }
        if ( $puntuacion1 == $puntuacion2 && $puntuacion1!=3){
            $Resultado=$Resultado . $puntuacion1 . " all";
        }

        if ($puntuacion1 == "Forty"  && $puntuacion2 == "Forty"){
            $Resultado = $this->Deuce();
        }

        return $Resultado;
    }


  function  wonPoint(string $jugador) : void
    {
        $aux = $this->controladordeuce();
       if  ($this->jugador1->getResultado()==3 && $this->jugador2->getResultado() == 3 && $aux<2 ){
           $this->wonPointDeuceDepurado($jugador,$this->jugador1);
           $this->wonPointDeuceDepurado($jugador,$this->jugador2);
           $aux = $this->controladordeuce();
           if($aux<2)
               $this->wonPoint($jugador);
       }else{
           $this->wonPointDepurado($jugador,$this->jugador1);
           $this->wonPointDepurado($jugador,$this->jugador2);
       }
    }

    private function  wonPointDepurado(string $nombre , Jugador $jugador) : void{
        if ($nombre==$jugador->getNombre()){
            $numero=$jugador->getResultado();
            $numero=$numero+1;
            $jugador->setResultado($numero);
        }
    }

    private function  wonPointDeuceDepurado(string $nombre , Jugador $jugador) : void{
        if ($nombre==$jugador->getNombre()){
            $numero=$jugador->getDeuce();
            $numero=$numero+1;
            $jugador->setDeuce($numero);
        }
    }
    private function controladordeuce(): int{
        $aux1 = $this->jugador1->getDeuce();
        $aux2 = $this->jugador2->getDeuce();
        $aux3=$aux1-$aux2;
        return abs($aux3);
    }

    function Deuce():string{
        if ($this->jugador1->getDeuce()==$this->jugador2->getDeuce())
        return "Deuce";
        if ($this->jugador1->getDeuce()>$this->jugador2->getDeuce())
            return "Ventaja " . $this->jugador1->getNombre();
        if ($this->jugador1->getDeuce()<$this->jugador2->getDeuce())
            return "Ventaja " . $this->jugador2->getNombre();
    }



    private function TraductorPunto(int $numero):string
    {
        if ($numero==0){
            return "Love";
        }
        if ($numero==1){
            return "Fifteen";
        }
        if ($numero==2){
            return "Thirty";
        }
        if ($numero==3){
            return "Forty";
        }
        if ($numero==4){
            return "Win";
        }
    }
}