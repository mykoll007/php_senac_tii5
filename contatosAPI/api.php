<?php

require_once 'DatabaseRepository.php';

// $action;

// if(isset($_GET['action'])) {
//     $action = $_GET['action'];
// } else {
//     $action = '';
// }
//Mesma coisa em cima ou aqui embaixo na linha 13
$action = isset($_GET['action']) ? $_GET['action'] : '';



switch($action){
    case 'list':
    echo json_encode(DatabaseRepository::getAllContacts());
    break;
    case 'get':
        $id = $_GET['id'];
        echo json_encode(DatabaseRepository::getContactById($id));
        break;
    case 'add':
            $data = json_decode(file_get_contents('php://input', true));
            $success = DatabaseRepository::insertContact($data->nome, $data->telefone, $data->email);
            echo json_encode(['success' => $success]);
        break;
    case 'delete':
            $id = $_GET['id'];
            $success = DatabaseRepository::deleteContact($id);
            echo json_encode(['scucess' => $success]);
        break;
        

    default:
    echo json_encode(['error' => 'Acao invalida']);
}
        


?>