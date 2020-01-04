<?php

Class Responsavel{

    private $nomeRresponsavel;
    private $matriculaResponsavel;
    private $rgResponsavel;

    public function __construct($nomeRresponsavel,$matriculaResponsavel,$rgResponsavel){

        $this ->nome = $nomeRresponsavel;
        $this ->matricula = $matriculaResponsavel;
        $this ->rg = $rgResponsavel;
    }
    public getNome(){

        return $this->nomeResponsavel;
    }
    public setNome($n){

        $this->nomeResponsavel = $n;
    }
    public getMatricula(){

        return $this->matriculaResponsavel;
    }
    public setMatricula($m){

        $this->matriculaResponsavel = $m;
    }
    public getRg(){

        return $this->rgResponsavel;
    }
    public setRg($rg){

        $this->rgResponsavel = $rg;
    }
}
?>