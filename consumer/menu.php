<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f6f6f6;
            background-color: beige;
        }
        .box{
            width: 300px;
            border-bottom: 20px solid #03a9f4;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .box h2{
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 700;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .box{
            position: relative;
            background: #fff;
        }
        .box ul li{
            list-style: none;
            padding: 10px;
            background: #fff;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .1);
            transition: transform 0.5s;
        }
        .box ul:hover li{
            opacity: 0.2;
        }
        .box ul li:hover{
            transform: scale(1.1);
            z-index: 100;
            opacity: 1;
            background: #25bcff;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .2);
            color: #fff;
        }
        .box ul li span{
            width: 20px;
            heheight: 20px;
            text-align: center;
            line-height: 20px;
            background: #25bcff;
            color: #fff;
            display: inline-block;
            border-radius: 50%;
            margin-right: 10px;
            font-size: 12px;
            font-weight: 600;
            transform: translateY(-2px);   
        }
        .box ul li:hover span{
            background: #fff;
            color: #25bcff;
        }
        a{
            text-decoration: none;
        }
    </style>
    <div class="box">
        <h2>Menu de navegacion</h2>
        <ul>
            <li><span>1</span><a href="categoria/administrarCategoria.php">Categorias</a></li>
            <li><span>2</span><a href="apis/contacto.php">Contacto</a></li>
            <li><span>4</span><a href="salir.php">Salir</a></li>
        </ul>
    </div>
    <!-- <center>
        <ul>
            <li><a href="categoria/administrarCategoria.php">Categorias</a></li>
            <li><a href="apis/contacto.php">Contacto</a></li>
            <li><a href="apis/geolocalizacion">Geolocalizacion</a></li>
            <li><a href="salir.php">Salir</a></li>
        </ul>
    </center> -->
</body>
</html>