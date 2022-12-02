<div id="WAButton"></div>

<style>
    .burbuja-whatsapp {
        width: 7vmin;
    }

    .burbujas {
        text-align: center;
    }
</style>

<script src="https://kit.fontawesome.com/ab4fa16bfb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
    <script>
        $(function() {
            $('#WAButton').floatingWhatsApp({
                phone: '5216182385321', //Número de telefono (Con prefijo 521 para México)
                headerTitle: '¡Envíanos un mensaje!', //Título de la ventana
                popupMessage: '¡Hola!, Gracias por confiar en nosotros. ¿En qué te podemos ayudar?', //Mensaje de la ventana
                showPopup: true, //Permite que esté visible el botón flotante
                buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" class="imgpop" />', //Button Image
                position: "right"
            });
        });
    </script>