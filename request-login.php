<?php
require __DIR__ . '/autoload.php';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($post)) {
    $request = new Usuarios();
    $post['senha'] = md5($post['senha']);
    $data = $request->login($post);

    if ($data) {
        $_SESSION['lg'] = $data['id'];
        header('Location: index.php');
        exit;
    } else {
        $queryString = http_build_query($post);
        $url = "login.php?" . $queryString;
        header('Location: ' . $url);
        exit;
    }
}