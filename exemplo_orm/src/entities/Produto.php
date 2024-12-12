<?php

namespace Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'produto')]
class Produto {

    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;

    #[Column(type:"string")]
    private $nome;

    #[Column(type:"float")]
    private $preco;

    // Método mágico
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

}

?>