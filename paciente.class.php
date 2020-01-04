<?php
 Class Paciente{

    private $susPaciente;
    private $nomePaciente;
    private $enderecoPaciente;
    private $contatoPaciente;
    private $dataNascimentoPaciente;
    private $nomeMaePaciente;
    private $nomePaiPaciente;

    public function __construct($susPaciente,$nomePaiPaciente,$enderecoPaciente,$contatoPaciente,$dataNascimentoPaciente,$nomeMaePaciente,$nomePaiPaciente){

        $this ->Sus = -1;
        $this ->nome = $nomePaciente;
        $this ->endereco = $enderecoPaciente;
        $this ->contato = $contatoPaciente;
        $this ->dataNascimento = $dataNascimentoPaciente;
        $this ->nomeMae = $nomeMaePaciente;
        $this ->nomePai = $nomePaiPaciente; 

    }

    public function getSus(){

        return  $this->susPaciente;
    }
    public function setSus($s){

        $this->susPaciente = $s;
    }
    public function getNome(){

        return $this->nomePaciente;
    }
    public setNome($n){

        $this->nomePaciente = $n;
    }
    public getEndereco(){

        return $this->enderecoPaciente;
    }
    public setEndereco($e){

        $this->enderecoPaciente = $e;
    }
    public getContato(){

        return $this->contatoPaciente;
    }
    public setContato($c){

        $this->contatoPaciente = $c;
    }
    public getData_nascimento(){

        return $this->dataNascimentoPaciente;
    }
    public setData_nascimento($dn){

        $this->dataNascimentoPaciente = $dn;
    }
    public getNome_mae(){

        return $this->nomeMaePaciente;
    }
    public setNome_mae($nm){

        $this->nomaMaePaciente = $nm;
    }
    public getNome_pai(){

        return $this->nomePaiPaciente;
    }   
    public setNome_pai($np){

        $this->nomaPaiPaciente = $np;
    }
 }
?>