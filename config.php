<?php 
require_once __DIR__ . "/autoload.php";  
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

$treinosNoticias = new TreinosNoticias();
$categorias = new Categorias();
$tiposTreinamentos = new TiposTreinamentos();
$usuario = new Usuarios();
$usuario->validateLogado();