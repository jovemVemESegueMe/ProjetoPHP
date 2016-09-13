<?php
include 'banco.php';

class Pet{
    private $id;
    private $nome;
    private $sexo;
    private $dataNascimento;
    private $foto;

    public function ola(){
        echo "class pet";
    }
    
    public function save(){
        echo "salvar pet";
    }
    
    public function getAll(){
        $sql = 'select * from mundo_animal.pets';
        return mysql_query($sql);
    }
    
    //Getters e Setters
    public function getId(){
        return $this->$id; 
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->$nome; 
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSexo(){
        return $this->$sexo; 
    }
    
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getDataNascimento(){
        return $this->$dataNascimento; 
    }
    
    public function setDataNascimetno($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    
    public function getFoto(){
        return $this->$foto; 
    }
    
    public function setFoto($foto){
        $this->$foto = $foto;
    }
}
?>