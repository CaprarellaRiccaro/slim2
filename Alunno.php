<?php
class Alunno implements JsonSerializable{
    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    function set_nome($nome) {
    $this->nome = $nome;
    }

    function set_cognome($cognome){
        $this->cognome = $cognome;
    }

    function set_eta(){
        $this->eta = $eta;
    }
    
    function get_nome() {
        return $this->nome;
    }
  
    function get_cognome(){
        return $this->cognome;
    }

    function get_eta($eta){
        return $this->eta;
    }

    function toString(){ 
        return "nome: " . $this->nome. "<br>" . "Cognome: " .  $this->cognome . "<br>" . "Età: " . $this->eta . "<br>";
    }

    public function jsonSerialize(){
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'età' => $this->eta;
        ];
    }