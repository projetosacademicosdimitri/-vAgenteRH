<?php
//include_once '../../controller/ClienteController.php';
//$objCliente = new ClienteController();
//$clientes = $objCliente->index()
include_once '../../routes/cliente.php';

$clientes = route('_GET');

include_once '../template/header.php';
?>

<?php include_once '../template/menu.php'; ?>

<body>
    <div class="container">
        
        
        <div class="row top17">
            <div class="col-md-12">
                <h2 class="text-center">Lista Clientes</h2>
            </div>
        </div>
        
        <div class="row top15">
            <div class="col-md-12">
                <a href="create.php"><button type="button" class="btn btn-primary ">Adicionar</button></a>
            </div>
        </div>
        
               
        <div class="row top30">
            <table class="table table-striped" id="grid">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone 1</th>
                        <th>Telefone 2</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                   <?php  foreach ($clientes as $value){?>
                    <tr>
                        <?php
                             
                            echo "<td>".$value['id_cliente']."</td>";
                            echo "<td>".$value['nome']."</td>";
                            echo "<td>".$value['cpf']."</td>";
                            echo "<td>".$value['telefone_fixo']."</td>";
                            echo "<td>".$value['telefone_celular']."</td>";
                            echo "<td><a href='edite.php?_httpRequest=_GET/@ID&id_cliente=".$value['id_cliente']."'><button type='button' class='btn btn-sucess '>Editar</button></a></td>";
                            echo "<td><a href='../../routes/cliente.php?_httpRequest=_DELITE&id_cliente=".$value['id_cliente']."'><button type='button' class='btn btn-danger '>Excluir</button></a></td>";
                           
                      
                          }
                        ?>
                    </tr>
                   
                </tbody>
            </table>
        </div>

    </div>


</div>

<?php include_once '../template/footer.php' ?>
</body>

