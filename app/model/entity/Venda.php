<?php
namespace app\model\entity;

class Venda {
    private $id;
    private $valor;
    private $data;
    private $produto;
    private $vendedor;

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
}
