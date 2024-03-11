<?php
require_once("Alunno.php");

class Classe{
    protected $modo = [];
    public function __construct(){
        $a = new Alunno("Mario", "Rossi", 18);
        $b = new Alunno("Luca", "Bianchi", 19);
        $c = new Alunno("Giuseppe", "Verdi", 20);
        array_push($this->modo, $a);
        array_push($this->modo, $b);
        array_push($this->modo, $c);
    }

    public function getAlunno(){
        foreach($this->modo as $alunno){
            if($alunno->get_nome() == $nome)
                return  $alunno;
        }
        return null;
    }

    function toHTML(){
        $s='<h1>Elenco alunni</h1>';
        foreach($this->modo as $alunno){
            $s.= $alunno->toString();
        }
        return $s;
    }
}