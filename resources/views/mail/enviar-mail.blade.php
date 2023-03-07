<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/home.scss')
    <link rel="stylesheet" href="resources/css/app.css">
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
        font-family: sans-serif;
        font-size: 2rem;

    }
    .botonMail{
    display: block;
    padding: 1.2rem 3rem;
    border-radius: 1rem;
    border: none; 
    background-color: rgb(137, 42, 231);
    color: white;
    text-align: center;
    text-decoration: none;
    width: 150px;
    font-weight: 700;
    transition: background-color 0.3s ease;
    cursor: pointer;
    }
    .botonMail:hover{
        background-color: rgb(41, 14, 67);
        color: white
    }
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        color: white
    }
</style>
    <title>Document</title>
</head>
<body>
    <div class="text-center">
        <h1>Enviado correo</h1>
        <p>Bienvenido a Wikiuniverse, clicka para saber mas sobre nuestro universo</p>
        <a href="{{ route('login') }}" class="botonMail">Inicia Sesion</a>
    </div>
</body>
</html>