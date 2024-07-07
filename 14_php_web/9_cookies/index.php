<?php
//o HTTP é um protocolo que nao mantem o estado (stateless)
//apos o fim da requisicao a conexao entre usuario e servidor é finalizada, a proxima conexao nao possui mais relacao entre ambos
//para conseguir manter esses dados podemos utilizar os cookies
//o problema desta abordagem é que alguns navegadores nao permitem o uso de cookies ou o bloqueiam

//os coockies sao strings que contem informações
//a funcao para adicionar um coockie é setcookie
//a funcao deve ser chamada antes do corpo da pagina, pois envia dados como header (cabeçalho)
//o cookie leva dados como: nome, valor e data de expiração
//podemos acessar os cookies de volta com $_COOKIE

    setcookie("nome", "Leticia", time() + 3600);

    if(isset($_COOKIE['nome'])) {

        $nome = $_COOKIE['nome'];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>