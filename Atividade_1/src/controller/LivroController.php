<?php
namespace Controller;
use Doctrine\ORM\EntityManager;
use Model\Livro;
class LivroController{
    
    public static function index(EntityManager $entityManager){
        $livrosRepository = $entityManager->getRepository("Model\Livro");
        $livro = $livrosRepository->findAll();
        return include(__DIR__."/../views/listarAllLivro.php");
    }
    public static function cadastro(){
        return include("../views/cadastrarLivro.php");
    }
    public static function create(EntityManager $entityManager){
        if (isset($_POST["cadastrarLivro"])){
            $livro = new Livro();
            $livro->titulo = $_POST["titulo"];
            $livro->descricao = $_POST["descricao"];
            $livro->autor = $_POST["autor"];
            $livro->preco = $_POST["preco"];
            $entityManager->persist($livro);
            $entityManager->flush();
            header("location: /");
        }
    }
}