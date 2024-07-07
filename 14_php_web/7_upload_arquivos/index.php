<?php
//para enviar arquivos ao servidor vamos precisar mudar o enctype do formulário para: multipart/form-data
//também sera necessario um input de tipo file
//o tamanho do arquivo pode exaurir a memoria do servidor
//depois do envio, todos os dados da imagem estarao em $_FILES

    if(isset($_FILES)) {

        print_r($_FILES);

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
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>