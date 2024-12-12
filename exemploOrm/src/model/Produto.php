<?php
namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
#[Entity]
#[Table(name:"produto")]
class Produto{
    #[Id]
    #[Column(type:"integer",nullable:false),GeneratedValue]
    private $id;
    #[Column(type:"string")]
    private $nome;
    #[Column(type:"double")]
    private $preco;

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    function __get($atributo){
        return $this->$atributo;
    }
}