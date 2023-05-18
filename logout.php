<?php
session_start();

if (!empty($_SESSION['lg'])) {
    unset($_SESSION['lg']);
}

header('Location: index.php');