<!-- Definire classe Persona:
    - ATTRIBUTI (private):
        - nome
        - cognome
        - dataNascita (stringa)
    - METODI:
        - costruttore che accetta nome e cognome
        - setter/getter per ogni variabile
        - printFullPerson: che stampa "nome cognome: dataNascita"
        - toString: che ritorna "nome cognome: dataNascita"


    Definire classe Employee che eredita da Persona:
    - ATTRIBUTI (private):
        - stipendio
        - dataAssunzione
    - METODI:
        - costruttore che accetta nome, cognome e stipendio
        - setter/getter per variabili 
        - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
        - toString: che ritorna "nome cognome: stipendio (dataAssunzione)" -->
      
     

        <?php

class Persona{
    
    private $nome;
    private $cognome;
    private $dataNascita;

    public function __construct($nome, $cognome){
        $this -> setNome($nome);
        $this -> setCognome($cognome);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
         $this->nome = $nome;
    }

    public function getCognome(){
        return $this->cognome;
    }
    public function setCognome($cognome){
        $this->cognome = $cognome;
    }

    public function getDataNascita(){
        return $this->dataNascita;
    }
    public function setDataNascita($dataNascita){
         $this->dataNascita = $dataNascita;
    }

    public function printFullPerson(){
        return $this-> getNome(). " " . $this->getCognome() . ": " . $this->getDataNascita() ;
    }

    public function __toString(){
        return $this->getNome() . " " . $this->getCognome() . ": " . $this->getDataNascita();
    }
}

class Employee extends Persona{
    private $stipendio;
    private $dataAssunzione;

     public function __construct($nome, $cognome, $stipendio){
         $this->setNome($nome);
         $this->setCognome($cognome);
         $this->setStipendio($stipendio);
     }

    public function getStipendio(){
        return $this->stipendio;
    }
    public function setStipendio($stipendio){
         $this->stipendio = $stipendio;
    }

    public function getDataAssunzione(){
        return $this->dataAssunzione;
    }
    public function setDataAssunzione($dataAssunzione){
         $this->dataAssunzione = $dataAssunzione;
    }

    public function printFullEmployee(){
        return $this-> getNome(). " " . $this->getCognome() . ": " . $this->getStipendio() . "(" . $this->getDataAssunzione . ")";
    }

    public function __toString(){
        return $this->getNome() . " " . $this->getCognome() . ": " . $this->getStipendio() . "(" . $this->getDataAssunzione . ")";
    }
}

$p1 = new Persona("marco", "ciao");
$p1-> setDataNascita("10-12-2030");

$e1 = new Employee("gio", "verdi", "1200euro");
$e1-> setDataNascita("1-11-2022");

echo $p1 . "<br>" . 
    $p1 -> printFullPerson(). "<br>" . "<br>" .
    $e1 . "<br>" . 
    $e1 -> printFullEmployee() ;

?>