<?php

namespace Model;

class Funcionario {

	private $id;
	private $nome;
	private $email;
	private $senha;
	private $dataCadastro;
	
    /**
     * Método mágico
     */
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    /**
     * Método mágico
     */
    public function __get($atributo) {
        return $this->$atributo;
    }
	
}

?>
