<?php
    class Produtos{
        protected string $logo;
        protected string $modo;
        protected int $grama;

        public function __construct(string $marca, $string $tipo, int $grama){
            $this->marca = $logo;
            $this->tipo  = $modo;
            $this->grama = $grama;
        }





        public function __get(string $qualQuer){
            return $this->$qualQuer;
        }




        public function __set(string $qualQuer, string $valor){
            $this->qualQuer = $valor;
        }



        public function __ToString() : string{
            return "<br>Marca:  ".$this->marca."<br>Tipo:  ".$this->tipo."<br>Gramas:  ".$this->grama;
        }


        
    }//Fim da classe produtos
?>