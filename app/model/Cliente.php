<?php

include __DIR__ . '../../config/Connection.php';

/**
 * Description of Cliente
 *
 * @author Dimitri Miranda
 */
class Cliente {

    private $conn = null;

    public function __construct() {

        $this->conn = Connection::getConnection();
    }

    public function create($dtoCliente) {

        $sql = "INSERT INTO cliente(
            
		                nome ,
				cpf,
                                telefone_fixo,
                                telefone_celular,
                                data_nasc
				
                                ) 
						
				VALUES (
                                
				:nome ,
				:cpf,
                                :telefone_fixo,
                                :telefone_celular,
                                :data_nasc
                                
                             )";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $dtoCliente->nome);
        $stmt->bindParam(':cpf', $dtoCliente->cpf);
        $stmt->bindParam(':telefone_fixo',$dtoCliente->telefone_fixo);
        $stmt->bindParam(':telefone_celular',$dtoCliente->telefone_celular);
        $stmt->bindParam(':data_nasc', $dtoCliente->data_nasc);
        $stmt->execute();
       
        return $stmt; 
        
        
    }

    public function showAll() {

        $sql = $this->conn->prepare("SELECT * FROM cliente ");
        $sql->execute();
        return $sql;
    }

    public function show($id) {
        
        
        $stmt = $this->conn->prepare("SELECT * FROM cliente  WHERE id_cliente = :id_cliente ");
        $stmt->bindParam(':id_cliente', $id);
        $stmt->execute();
        return $stmt;
        
        
        
    }

    public function update($dtoCliente){
        
         $sql = "   UPDATE cliente  SET 
            
		                nome = :nome,
				cpf  = :cpf,
                                telefone_fixo = :telefone_fixo,
                                telefone_celular = :telefone_celular,
                                data_nasc = :data_nasc
                                
                        
		    WHERE id_cliente = 	:id_cliente	
                               
                         ";
 
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $dtoCliente->nome);
        $stmt->bindParam(':cpf', $dtoCliente->cpf);
        $stmt->bindParam(':telefone_fixo',$dtoCliente->telefone_fixo);
        $stmt->bindParam(':telefone_celular',$dtoCliente->telefone_celular);
        $stmt->bindParam(':data_nasc', $dtoCliente->data_nasc);
        $stmt->bindParam(':id_cliente', $dtoCliente->id_cliente);
        $stmt->execute();
       
        return $stmt; 
        
    }
    
    
    public function delete($id){
        
        $stmt = $this->conn->prepare("DELETE FROM cliente  WHERE id_cliente = :id_cliente ");
        $stmt->bindParam(':id_cliente',$id);
        $stmt->execute();
        return $stmt; 
        
        
        
        
    }

    
}
