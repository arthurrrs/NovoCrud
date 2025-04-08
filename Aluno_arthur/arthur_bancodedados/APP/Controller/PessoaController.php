<?php

class PessoaController {

    public static function index() {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model-> getAllRows();

        include 'View/modulos/Pessoa/ListaPessoa.php';
    }


    public static function form()  {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        if (isset($GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
          
        }


        //var_dump($model);

        include 'View/modulos/Pessoa/FormPessoa.php';



}

    public static function save() {
        //var_dump($_POST);
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model-> id = $_POST['id'];
        $model-> nome = $_POST['nome'];
        $model-> cpf = $_POST['cpf'];
        $model-> data_nascimento = $_POST['data_nascimento'];

        $model->save();
        
        header("Location: /pessoa");
    }


    public static function delete() {
        include "Model/PessoaModel.php";

        $model = new PessoaModel();
        $model->delete((int) $_GET['id']);

        header("Location: /pessoa");
    }

}



?>