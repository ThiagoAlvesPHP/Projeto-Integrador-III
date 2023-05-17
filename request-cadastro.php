<?php
require __DIR__ . '/autoload.php';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($post)) {
    $request = new Usuarios();
    $post['senha'] = md5($post['senha']);

    if (!$request->validateEmail($post['email'])) {
        $_SESSION['lg'] = $request->set($post);
        header('Location: index.php');
        exit;
    } else {
        $queryString = http_build_query($post);
        $url = "cadastro.php?" . $queryString;
        header('Location: ' . $url);
        exit;
    }
}
