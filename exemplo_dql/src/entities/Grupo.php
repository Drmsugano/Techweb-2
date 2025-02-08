<?php

namespace Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity()]
#[Table(name:'grupo')]
class Grupo {

    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;

    #[Column(type:"string", name:"nome_grupo")]
    private $nomeGrupo;

    #[ManyToMany(targetEntity:Usuario::class, mappedBy:"grupos")]
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