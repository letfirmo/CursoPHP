<?php

    //strip_tags
    //geralmente para salvar dados no banco removemos as tags

    $txtHTML = "<p> Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $txtHTML;

    $salvarTxtBanco = strip_tags($txtHTML);

    echo $salvarTxtBanco;