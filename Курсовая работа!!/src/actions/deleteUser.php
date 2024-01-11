<?php
require_once __DIR__ . '/../helpers.php';


checkAuth();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userIdToDelete = $_POST['userId'] ?? null;

    if (!$userIdToDelete) {
        header("Location: error.php");
        exit;
    }


    $currentUser = currentUser();
    if ($currentUser['role_id'] != 1) {
        die("Пользователь не является администратором");
        exit;
    }


    $success = deleteUserId($userIdToDelete);

    if ($success) {
        header("Location: /3-3.php");
        exit;
    } else {
        die("Не удалось удалить пользователя");
        exit;
    }
} else {
    die("Запрос не является POST-запросом");
    exit;
}
?>
