<?php
abstract class Bebida{
   protected $nome;
   protected $preco;

   public function __construct($nome, $preco){
      $this->nome = $nome;
      $this->preco = $preco;
   }

    public function setNome($nome){
        $this->nome = $nome;   
     }

     public function setPreco($preco){
        $this->preco = $preco;   
     }

     public function getNome(){
        return $this->nome;   
     }

     public function getPreco(){
        return $this->preco;   
     }

     abstract public function mostrarBebida();

     abstract public function verificarPreco();

}

?>