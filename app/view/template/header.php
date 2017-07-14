<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Teste AgenteRH</title>
        <!-- Bootstrap core CSS -->
        <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../public/css/offcanvas.css" rel="stylesheet">

        <!-- Jquery Table -->
        <link href="../../public/css/jquery.dataTables.min.css" rel="stylesheet">

    </head>

   <?php if (isset($_GET['msg']) && $_GET['msg'] == 'success') { ?>

        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Sucesso! </strong>
            Oeração concluida.
        </div>

    <?php } ?>

 <?php if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

        <div class="alert alert-danger" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Erro! </strong>
            Erro ao tentar realizar operação.
        </div>

    <?php
    
    }?>

    
    <script>
    
     setTimeout(function(){
    $('.alert').fadeTo("slow", 0.1, function(){
        $('.alert').alert('close')
    });     
    }, 2000)
    </script>