
<?php

class MotoController
{

    public static function index()
    {

        include 'Model/MotoModel.php';

        $model = new MotoModel();
        $model->getAllRows();

        include 'View/modulos/Moto/ListaMoto.php';
    }

    public static function form()
    {

        include 'Model/MotoModel.php';

        $model = new MotoModel();

        if (isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }


        include 'View/modulos/Moto/FormMoto.php';
    }

    public static function save()
    {

       

        include 'Model/MotoModel.php';

        $model = new MotoModel();


        $model->id = $_POST['id'];
        $model->Marca = $_POST['Marca'];
        $model->nomeMoto = $_POST['nomeMoto'];
        $model->Quilometros = $_POST['Quilometros'];
        $model->Ano = $_POST['Ano'];

        $model->save();

        header("Location: /Moto");
    }

    public static function delete()
    {
        include "Model/MotoModel.php";

        $model = new MotoModel();
        $model->delete((int) $_GET['id']);

        header("Location: /Moto");
    }
}


?>

