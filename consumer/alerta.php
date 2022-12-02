<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
if($a==3){
?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Registro completado.',
        button: "Ok"
        }).then(function(){
            location.href = 'administrarCategoria.php';
        });
    </script>
<?php }elseif($a == 2){?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Ha ocurrido un error',
        text: 'Intentalo de nuevo.',
        button: "Ok"
        });
    </script>
<?php }elseif($a == 0){?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Ha ocurrido un error',
        text: 'Intentalo de nuevo.',
        button: "Ok"
        });
    </script>
<?php }elseif($a == 1){?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Actualización completada.',
        button: "Ok"
        }).then(function(){
            location.href = 'administrarCategoria.php';
        });
    </script>
<?php }elseif($a == 4){?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Ha ocurrido un error',
        text: 'Intentalo de nuevo.',
        button: "Ok"
        });
    </script>
<?php }elseif($a == 5){?>
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Eliminación completada.',
        button: "Ok"
        }).then(function(){
            location.href = 'administrarCategoria.php';
        });
    </script>
<?php }?>