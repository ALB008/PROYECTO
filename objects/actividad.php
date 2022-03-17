<?php

class actividad{
    private $NomA;
    private $DescA;
    private $UbiA;
    private $DiaA;
    private $HoraA;
    private $LimitA;
    private $DuracA;

public function Actividad__(){

}

public function Actividad_(string $nomA, string $descA, string $ubiA, string $diaA, time $horaA, int $limitA, int $duracA){
    $this->$NomA = $nomA;
    $this->$DescA = $descA;
    $this->$UbiA = $ubiA;
    $this->$DiaA = $diaA;
    $this->$HoraA = $horaA;
    $this->$LimitA = $limitA;
    $this->$DuracA = $duracA;
}

public function getNomA(){
    return $this->$NomA;
}

public function getDescA(){
    return $this->$DescA;
}

public function getUbiA(){
    return $this->$UbiA;
}

public function getDiaA(){
    return $this->$DiaA;
}

public function getHoraA(){
    return $this->$HoraA;
}

public function getLimitA(){
    return $this->$LimitA;
}

public function getDuracA(){
    return $this->$DuracA;
}



}
?>