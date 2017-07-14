<?php ?>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../public/js/jquery.js"></script>
<script src="../../public/js/bootstrap.js"></script>
<script src="../../public/js/bootstrap.min.js" ></script>
<script src="../../public/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#grid').DataTable({
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Exibindo página _PAGE_ of _PAGES_",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Seguinte",
                    "sPrevious": "Anterior"
                }
            }


        });
    });
</script>

