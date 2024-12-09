<?php
namespace Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
#[Entity]
#[Table(name: 'livro')]
class Livro{
    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;
    #[Column(type:"string")]
    private $titulo;
    #[Column(type:"string")]
    private $autor;
    #[Column(type:"float")]
    private $preco;

    public function __set($nome, $valor){
        $this->$nome = $valor;
    }

    public function __get($nome){
        return $this->$nome;
    }
}