
<?php
include 'Controller/MotoController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/':
        echo "Pagina inicial - 🏍️";
        break;

    case '/Moto':
        echo "Listar Moto - 🏍️";
        MotoController::index();
        break;

    case '/Moto/form':
        MotoController::form();
        break;

    case '/Moto/form/save':
        MotoController::save();
        break;

    case '/Moto/delete':
        MotoController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}


?>