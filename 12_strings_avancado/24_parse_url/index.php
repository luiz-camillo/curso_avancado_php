<?php       

    $url = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#overview";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);

    echo "<br>";

    echo($arrayUrl["host"]);