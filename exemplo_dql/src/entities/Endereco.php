<?php

namespace Entities;

use Doctrine\DBAL\Schema\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;


#[Entity]
#[Table(name:'endereco')]
class Endereco {

    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;

    #[Column(type:"string")]
    private $rua;

    #[Column(type:"integer")]
    private $numero;

    #[OneToMany(targetEntity: Usuario::class, mappedBy: "endereco")]
    private $usuarios;


    // Método mágico
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

}

?>