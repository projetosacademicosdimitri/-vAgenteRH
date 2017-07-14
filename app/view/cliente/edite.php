<?php include_once '../template/header.php'; ?>
<?php include_once '../template/menu.php'; ?>

<?php
include_once '../../routes/cliente.php';
$clientes = route('_GET/@ID');

?>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <form action="../../routes/cliente.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="<?php echo $clientes[0]['nome']; ?> " />
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Password" value="<?php echo $clientes[0]['cpf'];?>" />
                    </div>

                    
                    <div class="form-group">
                        <label for="telefone_fixo">Telefone Fixo</label>
                        <input type="text" class="form-control" id="telefone_celular" name="telefone_fixo" placeholder="telefone_fixo" value="<?php echo $clientes[0]['telefone_fixo'];?>" />
                    </div>
                    
                    <div class="form-group">
                        <label for="telefone_celular">Telefone Celular</label>
                        <input type="text" class="form-control" id="telefone_celular" name="telefone_celular" placeholder="telefone_celular" value="<?php echo $clientes[0]['telefone_celular'];?>" />
                    </div>
                    
                    <div class="form-group">
                        <label for="dtnascimento">Data Nascimento</label>
                        <input type="text" class="form-control" id="dtnascimento" name="dtnascimento" placeholder="Data de Nascimento" value="<?php $clientes[0]['data_nasc'];?> "/>
                        <input type="hidden" class="form-control" id="_httpRequest" name="_httpRequest" value="_PUT">
                        <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $clientes[0]['id_cliente'];?>"/>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

        </div>


    </div>
    <?php include_once '../template/footer.php' ?>

</body>