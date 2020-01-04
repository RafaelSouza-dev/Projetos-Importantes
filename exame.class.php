<?php

Class Exame{

    private $codigoExame;
    private $dataExame;
    private $procedimentos;

    public function __construct($codigoExame,$dataExame,$procedimentos){

        $this ->codigo = $codigoExame;
        $this ->data = $dataExame;
        $this ->procedimento = $procedimentos;
    }
    public getCodigo(){

        return $this->codigoExame;
    }
    public setCpdigo($c){

        $this->codigoExame = $c;
    }
    public getData(){

        return $this->dataExame;
    }
    public setData($d){

        $this->dataExame = $d;
    }
    public getProcedimento(){

        return $this->procedimentos;
    }
    public setProcedimento($p){

        $this->procedimentos = $p;
    }
}
?>