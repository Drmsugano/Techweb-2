<?php

namespace Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity()]
#[Table(name:'perfil')]
class Perfil {
    
    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;

    #[Column(type:"string")]
    private $descricao;


    // Método mágico
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

}

?>