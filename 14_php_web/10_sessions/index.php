<?php
//com session podemos criar uma variavel que persiste em diferentes 
//paginas e tambem perdura por varias visistas ao mesmo site
//a session utiliza recursos de cookies para seu funcionamento, 
//e se o recurso estiver desabilitado propaga a sessão via URL
//Sessions sao utilizadas para: autentcação, carrinho de compras e tudo o que precisa persistir de página em página
//acaba sendo o recurso mais utilizado, comparado com o cookie

    session_start();

    //print_r($_SESSION);

    $_SESSION['nome'] = "Leticia";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
</body>
</html>