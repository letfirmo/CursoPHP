<?php

    //cre um array associativo com chaves com valor de nomes
    //e valores com uma pontuação
    //ordene os dados do maior para o menor
    //exiba uma lista, simulando um ranking, em HTML

    $ranking = [
        "Matheus" => 200,
        "João" => 54,
        "Pedro" => 444,
        "Maria" => 239,
        "Joana" => 123,
        "Henrique" => 12
    ];

    asort($ranking);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos </li>
    <?php endforeach; ?>
</ol>