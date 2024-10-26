<?php
namespace app\controller;
use app\model\dao\VendedorDao;
use app\model\dao\EquipeDao;
use app\model\entity\Vendedor;
class VendedorController extends Controller
{
    public static function listar()
    {
        parent::isProtected();
        $daoVendedor = new VendedorDao();
        $vendedor = $daoVendedor;
        $equipe = new EquipeDao();
        include("../app/view/module/vendedor/vendedorListar.php");
    }
    public static function form()
    {
        parent::isProtected();
        $equipeDao = new EquipeDao();
        $equipe = $equipeDao->read_all();
        include "../app/view/module/vendedor/vendedorCadastrar.php";
    }

    public static function create()
    {
        parent::isProtected();
        $daoVendedor = new VendedorDao();
        if (isset($_POST["cadastrarVendedor"])) {
            $vendedor = new Vendedor;
            $vendedor->nome = $_POST["nome"];
            $vendedor->nivel = $_POST["nivel"];
            $vendedor->equipe = $_POST["equipe"];
            if ($daoVendedor->create($vendedor)) {
                header("location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
            }
        }
    }
    public static function edit(){
        parent::isProtected();
        $daoVendedor = new EquipeDao();
        $daoVendedor = new VendedorDao();
        if (isset($_POST["alterarVendedor"])) {
            $vendedor = new Vendedor;
            $vendedor->id = $_POST["id"];
            $vendedor->nome = $_POST["nome"];
            $vendedor->nivel = $_POST["nivel"];
            $vendedor->equipe = $_POST["equipe"];
            if ($daoVendedor->update($vendedor)) {
                header("location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em alterar");</script>';
            }
        }
    }

    public static function delete()
    {
        $dao = new VendedorDao();
        if (isset($_REQUEST['id'])) {
            $vendedor = new Vendedor();
            $vendedor->id = $_REQUEST['id'];
            if ($dao->delete($vendedor->id)) {
                header("Location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}