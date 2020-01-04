<?php

Class Usuario{

    private $nomeUsuario;
    private $nivelUsuario;
    private $senhaUsuario;

    public function __construct($nomeUsuario,$nivelUsuario,$senhaUsuario){

        $this ->nome = $nomeUsuario;
        $this ->nivel = $nivelUsuario;
        $this ->senha  = $senhaUsuario;
    }
    public getNome(){

        return $this->nomeUsuario;
    }
    public setNome($n){

        $this->nomeUsuario = $n;
    }
    public getNivel(){

        return $this->nivelUsuario;
    }
    public setNivel($n){

        $this->nivelUsuario = $n;
    }
    public getSenha(){

        return $this->senhaUsuario;
    }
    public setSenha($s){

        $this->senhaUsuario = $s;
    }



}


?>