<?php

    $a = [1, 2, 3];

    // echo $a dessa forma não funcina

    print_r($a); // Array ( [0] => 1 [1] => 2 [2] => 3 )
    echo "<br>";
    echo $a[0]; //imprime 1

    $arr = ["Matheus", 1005, true];

    echo "<br>";
    print_r($arr); // Array ( [0]=> Matheus [1]=>1005 [2]=>1 )
    echo "<br>";
    print_r($arr[1]); // imprime 1005