<?php

// Lendo com senha
$context = stream_context_create([
	'zip' => [
		'password' => '123456'
	]
]);

echo file_get_contents('zip://projeto.zip#lista-cursos.txt', false, $context);
