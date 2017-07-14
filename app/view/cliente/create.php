<?php include_once '../template/header.php'; ?>
<?php include_once '../template/menu.php'; ?>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <form action="../../routes/cliente.php">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Password">
                    </div>

                    
                    <div class="form-group">
                        <label for="telefone_fixo">Telefone Fixo</label>
                        <input type="text" class="form-control" id="telefone_celular" name="telefone_fixo" placeholder="telefone_fixo">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="telefone_celular">Telefone Celular</label>
                        <input type="text" class="form-control" id="telefone_celular" name="telefone_celular" placeholder="telefone_celular">
                    </div>


                    <div class="form-group">
                        <label for="dtnascimento">Data Nascimento</label>
                        <input type="text" class="form-control" id="dtnascimento" name="dtnascimento" placeholder="Data de Nascimento">
                        <input type="hidden" class="form-control" id="_httpRequest" name="_httpRequest" value="_POST">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

        </div>


    </div>
    <?php include_once '../template/footer.php' ?>

</body>