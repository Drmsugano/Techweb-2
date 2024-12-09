<?php
namespace Controller;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Model\Livro;
class LivroController
{

    public static function index(EntityManager $entityManager)
    {
        $livrosRepository = $entityManager->getRepository("Model\\Livro");
        $livro = $livrosRepository->findAll();
        return include(__DIR__ . "/../views/livros.php");
    }
    public static function create(EntityManager $entityManager)
    {
        if (isset($_POST["cadastrarLivro"])) {
            $livro = new Livro();
            $livro->titulo = $_POST["titulo"];
            $livro->autor = $_POST["autor"];
            $livro->preco = $_POST["preco"];
            $entityManager->persist($livro);
            $entityManager->flush();
            header("location: /");
        }
    }

    public static function read(EntityManager $entityManager)
    {
        if (isset($_REQUEST["id"])) {
            $livro = $entityManager->find("Model\\Livro", $_REQUEST["id"]);
            include(__DIR__ . "/../views/livroRead.php");
        }
    }

    public static function update(EntityManager $entityManager)
    {
        if (isset($_POST["editarLivro"])) {
            $livro = $entityManager->find("Model\\Livro", $_POST["id"]);
            $livro->titulo = $_POST["titulo"];
            $livro->autor = $_POST["autor"];
            $livro->preco = $_POST["preco"];
            $entityManager->flush();
            header("location: /");
        }
    }
    public static function remove(EntityManager $entityManager)
    {
        if (isset($_REQUEST["id"])) {
            $id = $_REQUEST["id"];
            $livro = $entityManager->find("Model\\Livro", $id);
            $entityManager->remove($livro);
            $entityManager->flush();
            header("location: /");
        }
    }
}