<?php

include_once __DIR__ . '../../controller/ClienteController.php';

if (isset($_REQUEST) && !empty($_REQUEST)) {

    route($_REQUEST['_httpRequest']);
}

function route($_httpRequest) {

    $objCliente = new ClienteController();

    switch ($_httpRequest) {

        case '_GET' : return $clientes = $objCliente->index();
            break;

        case '_POST' :

            $dtoCliente = new stdClass();

            $dtoCliente->nome = $_REQUEST['nome'];
            $dtoCliente->cpf = $_REQUEST['cpf'];
            $dtoCliente->telefone_fixo = $_REQUEST['telefone_fixo'];
            $dtoCliente->telefone_celular = $_REQUEST['telefone_celular'];
            $dtoCliente->data_nasc = $_REQUEST['data_nasc'];
            $clientes = $objCliente->create($dtoCliente);

            if ($clientes) {
                $msg = 'success';
            } else {
                $msg = 'erro';
            }

            header("Location:../view/cliente/index.php?msg=$msg&_httpRequest=_GET");


            break;


            case '_GET/@ID' :

            $dtoCliente = new stdClass();
            $id = $_REQUEST['id_cliente'];
            return $clientes = $objCliente->show($id);

            break;

        case '_PUT' :

            $dtoCliente = new stdClass();

            $dtoCliente->id_cliente = $_REQUEST['id_cliente'];
            $dtoCliente->nome = $_REQUEST['nome'];
            $dtoCliente->cpf = $_REQUEST['cpf'];
            $dtoCliente->telefone_fixo = $_REQUEST['telefone_fixo'];
            $dtoCliente->telefone_celular = $_REQUEST['telefone_celular'];
            $dtoCliente->data_nasc = $_REQUEST['data_nasc'];

            $clientes = $objCliente->update($dtoCliente);

            if ($clientes->rowCount() > 0) {
                $msg = 'success';
            } else {
                $msg = 'erro';
            }

            header("Location:../view/cliente/index.php?msg=$msg&_httpRequest=_GET");


            break;


        case '_DELITE' :

            $dtoCliente = new stdClass();
            $id = $_REQUEST['id_cliente'];
            $clientes = $objCliente->delete($id);

            if ($clientes->rowCount() > 0) {
                $msg = 'success';
            } else {
                $msg = 'erro';
            }

            header("Location:../view/cliente/index.php?msg=$msg&_httpRequest=_GET");

            break;
    }
}
