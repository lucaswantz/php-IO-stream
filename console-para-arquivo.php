<?php

$novoCurso = trim(fgets(STDIN));

file_put_contents('curso-php.txt', PHP_EOL . $novoCurso, FILE_APPEND);
