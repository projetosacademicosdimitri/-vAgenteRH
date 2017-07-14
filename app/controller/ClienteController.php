<?php

include __DIR__ . '../../Model/Cliente.php';

/**
 * Description of ClienteController
 *
 * @author Dimitri Miranda
 */
class ClienteController {

    public function index() {

        $objCliente = new Cliente();
        return $objCliente->showAll()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($dtoCliente) {

        $objCliente = new Cliente();
        return $objCliente->create($dtoCliente);
    }

    public function show($id) {

        $objCliente = new Cliente();
        return $objCliente->show($id)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($dtoCliente){
        
        $objCliente = new Cliente();
        
        return $objCliente->update($dtoCliente);
        
    }

    public function delete($id) {
        
        $objCliente = new Cliente();
        return $objCliente->delete($id);
        
        
    }

}
