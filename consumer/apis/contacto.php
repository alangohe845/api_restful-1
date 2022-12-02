<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

</style>
    <div class="contact-in">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.943836709376!2d-104.65120098506215!3d23.997760284468043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb80365da664f%3A0xde84bfc9df616926!2sCl%C3%ADnica%20Veterinaria%20Allvet%20Real%20del%20Mezquital!5e0!3m2!1ses!2smx!4v1669402723946!5m2!1ses!2smx"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
            <h1>Contactanos</h1>
            <form action="https://formspree.io/f/mvoynjok" method="POST" id="form">
                <input type="text" placeholder="Nombre" class="contact-form-txt" name="Nombre:">
                <input type="text" placeholder="email" class="contact-form-txt" name="Email:">
                <textarea placeholder="Escribre tu mensaje.." name="Mensaje:" class="contact-form-txtarea"></textarea>
                <input type="submit" value="Enviar" class="contact-form-btn">
            </form>
        </div>
    </div>
    <div id="WAButton"></div>
    <script src="sweetalert.min.js"></script>
    <script>
        const $form = document.querySelector('#form')
        $form.addEventListener('submit', handleSubmit)
        async function handleSubmit(event) {
            event.preventDefault()
            const form = new FormData(this)
            const response = await fetch(this.action, {
                method: this.method,
                body: form,
                headers: {
                    'Accept': 'application/json'
                }
            })
            if (response.ok) {
                this.reset()
                Swal.fire({
                    icon: 'success',
                    title: 'Gracias por contactar al soporte, trabajaremos en tu problema.',

                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Ha ocurrido un error intenta nuevamente',

                })

            }
        }
    </script>
    <style>
        .burbuja-whatsapp {
            width: 7vmin;
        }

        .burbujas {
            text-align: center;
        }
    </style>

    <script src="https://kit.fontawesome.com/ab4fa16bfb.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
    <script>
        $(function () {
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
    
</body>

</html>