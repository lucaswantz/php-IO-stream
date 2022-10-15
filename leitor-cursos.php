<?php

// $arquivo = fopen('lista-cursos.txt', 'r');

// $tamanhoArquivo = filesize('lista-cursos.txt');
// $cursos = fread($arquivo, $tamanhoArquivo);

// fclose($arquivo);

$cursos = file_get_contents('lista-cursos.txt');
$listaCursos = file('lista-cursos.txt');

echo $cursos;
