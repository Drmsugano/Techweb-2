<?php

namespace Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\InverseJoinColumn;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\Common\Collections\ArrayCollection;

#[Entity]
#[Table(name: 'usuario')]
class Usuario {

    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;

    #[Column(type:"string")]
    private $nome;

    #[ManyToOne(targetEntity:Endereco::class, cascade:['persist', 'remove'], fetch:'EAGER')]
    #[JoinColumn(name:"endereco_id", referencedColumnName:'id')]
    private $endereco;

    #[OneToOne(targetEntity:Perfil::class)]
    #[JoinColumn(name:"perfil_id", referencedColumnName:"id")]
    private $perfil;

    #[ManyToMany(targetEntity:Grupo::class)]
    #[JoinTable(name:"usuarios_grupos")]
    #[JoinColumn(name: "usuario_id", referencedColumnName:"id")]
    #[InverseJoinColumn(name:"grupo_id", referencedColumnName:"id")]
    private $grupos;

    public function __construct() {
        $this->grupos = new ArrayCollection();
    }
    // Método mágico
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

}

?>