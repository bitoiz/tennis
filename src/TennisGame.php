<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{
 public Jugador $jugador1;
 public Jugador $jugador2;

    /**
     * TennisGame constructor.
     */
    public function __construct(string $Jugadoruno,string $jugadordos,int $nu1,int $nu2)
    {;
       $this->jugador1= new Jugador($Jugadoruno, $nu1);
       $this->jugador2= new Jugador($jugadordos, $nu2);

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
        if ( $puntuacion1 == $puntuacion2 && $puntuacion1<2){
            $Resultado=$Resultado . $puntuacion1 . " all";
        }
        if ($puntuacion1 =3  && $puntuacion1 =3){
            $Resultado = $this->Deuce();
        }
        return $Resultado;
    }
  function  wonPoint(string $jugador) : void
    {
       if  ($this->jugador1->getResultado()!=3 && $this->jugador2->getResultado() != 3 ){
           $this->wonPointDepurado($jugador,$this->jugador1);
           $this->wonPointDepurado($jugador,$this->jugador2);
       }else{
           if($jugador==$this->jugador1->getNombre()){
               $numero=$this->jugador1->getDeuce();
               $this->jugador1->setDeuce($numero+1);
           }
           if($jugador==$this->jugador2->getNombre()){
               $numero=$this->jugador2->getDeuce();
               $this->jugador2->setDeuce($numero+1);
           }
       }

    }
    function  wonPointDepurado(string $nombre , Jugador $jugador) : void{
        if ($nombre==$jugador->getNombre()){
            $numero=$jugador->getResultado();
            $jugador->setResultado($numero+1);
        }
    }

    private function Deuce():string{
        return "Deuce";
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