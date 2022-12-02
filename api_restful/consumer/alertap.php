<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
if($b == 0){?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Ha ocurrido un error',
        text: 'Intentalo de nuevo.',
        button: "Ok"
        });
    </script>
<?php }elseif($b == 1){?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Completado.',
        button: "Ok"
        }).then(function(){
            location.href = 'administrarProductos.php';
        });
    </script>
<?php }elseif($b == 3){?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Ha ocurrido un error',
        text: 'Intentalo de nuevo.',
        button: "Ok"
        }).then(function(){
            location.href = 'administrarProdcutos.php';
        });
    </script>
<?php }?>