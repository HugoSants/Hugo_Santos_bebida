<?php
require_once "Bebida.php";
Class Refri extends Bebida{
    private $retornavel;
    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida(){
        return "Nome: " . $this->nome . ", Preço: " . $this->preco . ", Sabor: " . $this->retornavel;
       }
   
       public function verificarPreco(){
           if($this->preco < 5){
               return true;
            }else if($this->preco > 5){
            return false;
            }
       }
}


?>