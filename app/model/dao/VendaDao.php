<?php
namespace app\model\dao;
use app\model\entity\Venda;
use \PDOExcetion;
use \PDO;

class VendaDao extends Dao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($venda)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("INSERT INTO venda (valor, produto_id, vendedor_id) VALUES (:valor, :produto_id, :vendedor_id);");
            $pdo_sql->bindValue(":valor", $venda->valor);
            $pdo_sql->bindValue(":produto_id", $venda->produto);
            $pdo_sql->bindValue(":vendedor_id", $venda->vendedor);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read_all()
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT v.id, p.descricao as produto, vd.nome as vendedor, v.valor, v.data FROM venda v INNER JOIN produto p ON v.produto_id = p.id INNER JOIN vendedor vd ON v.vendedor_id = vd.id;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();
            $vendas = [];
            foreach ($array_retorno as $lista) {
                $venda = new Venda();
                $venda->id = $lista['id'];
                $venda->valor = $lista['valor'];
                $venda->data = $lista['data'];
                $venda->produto = $lista['produto'];
                $venda->vendedor = $lista['vendedor'];
                $vendas[] = $venda;
            }
            return $vendas;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("SELECT * FROM venda WHERE id= :id;");
            $pdo_sql->bindValue(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_vnd = $pdo_sql->fetchAll();
            $venda = new Venda();
            $vendas = [];
            foreach ($array_vnd as $lista)
            {
            $venda->id = $lista['id'];
            $venda->valor = $lista['valor'];
            $venda->data = $lista['data'];
            $venda->produto = $lista['produto_id'];
            $venda->vendedor = $lista['vendedor_id'];
            $vendas[] = $venda;
            }
            return $vendas;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function update($venda)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("UPDATE venda SET valor=:valor, data=:data, produto_id=:produto_id, vendedor_id= :vendedor_id, data = current_timestamp() WHERE id=:id;");
            $pdo_sql->bindValue(":id", $venda->id);
            $pdo_sql->bindParam(":valor", $venda->valor, PDO::PARAM_STR);
            $pdo_sql->bindParam(":data", $venda->data, PDO::PARAM_STR);
            $pdo_sql->bindParam(":produto_id", $venda->produto, PDO::PARAM_INT);
            $pdo_sql->bindParam(":vendedor_id", $venda->vendedor, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $pdo = $this->conexao->get_pdo();
            $pdo_sql = $pdo->prepare("DELETE FROM venda WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
}