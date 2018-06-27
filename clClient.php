<!-- Aqui creem la clase amb els atributs que guardarem del formulari -->
<?php 
 class cliente
         {
            private $nom;
            private $cognom;
            private $codi;
         
               
            public function __construct()
            {
               //$this->nom=$nom;
               //$this->cognom=$cognom;
               //$this->codi=$codi;
            }

            public function getnom()
            {
               return $this->nom;
            }
            public function getcognom()
            {
               return $this->cognom;
            }
            public function getcodi()
            {
               return $this->codi;
            }

            public function  setnom($nom)
            {
               $this->nom = $nom;
            }
            public function  setcognom($cognom)
            {
               $this->cognom = $cognom;
            }
            public function  setcodi($codi)
            {
               $this->codi = $codi;
            }
      }

?>