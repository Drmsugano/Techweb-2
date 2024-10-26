<?php
namespace app\controller;
use app\model\dao\ProdutoDao;
use app\model\dao\VendaDao;
use app\model\dao\VendedorDao;
use app\model\entity\Venda;
class VendaController extends Controller
{
    public static function listar()
    {
        parent::isProtected();
        $venda = new VendaDao();
        $produto = new ProdutoDao();
        $vendedor = new VendedorDao();
        include "../app/view/module/venda/vendaListar.php";
    }
    public static function form()
    {
        parent::isProtected();
        $produto = new ProdutoDao();
        $vendedor = new VendedorDao();
        include "../app/view/module/venda/vendaCadastrar.php";
    }

    public static function create(){
        $dao = new VendaDao();
        if (isset($_POST["cadastrarVenda"])) {
            $venda = new Venda();
            $venda->valor = $_POST["valor"];
            $venda->produto = $_POST["produto"];
            $venda->vendedor = $_POST["vendedor"];
            if ($dao->create($venda)){
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }

    public static function edit(){
        $dao = new VendaDao();
        if (isset($_POST["alterarVenda"])) {
            $venda = new Venda();
            $venda->id = $_POST["id"];
            $venda->valor = $_POST["valor"];
            $venda->produto = $_POST["produto"];
            $venda->vendedor = $_POST["vendedor"];
            if ($dao->update($venda)){
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }

    public static function delete()
    {
        $dao = new VendaDao();
        if (isset($_REQUEST['id'])) {
            $venda = new Venda();
            $venda->id = $_REQUEST['id'];
            if ($dao->delete($venda->id)) {
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}
