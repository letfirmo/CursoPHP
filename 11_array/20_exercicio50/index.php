<?php

// crie um array associativo co nomes e idades
//imprima estes dados em uma tabela de HTML
//dica: utilize as tags do elemento table

$pessoas = [
    'Matehus' => 29,
    'Alexia' => 25,
    'Pedro' => 24,
    'João' => 43
];

?>

<table border = "1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
