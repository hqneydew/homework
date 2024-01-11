<?php
session_start();

require_once __DIR__ . '/helpers.php';

checkAuth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['newName'] ?? '';

    // Валидация нового имени
    if (empty($newName)) {
        $_SESSION['validation']['newName'] = 'Новое имя не может быть пустым';
        redirect('/3-3.php');
    }

    $pdo = getPDO();
    $userId = $_SESSION['user']['user_id'];

    try {
        // Обновление имени в базе данных
        $stmt = $pdo->prepare("UPDATE users SET name = :newName WHERE user_id = :userId");
        $stmt->execute(['newName' => $newName, 'userId' => $userId]);

        // Обновление имени в сессии
        $_SESSION['user']['name'] = $newName;

        // Редирект обратно на страницу 3-3.php
        redirect('/3-3.php');
    } catch (\Exception $e) {
        die("Ошибка при обновлении имени: {$e->getMessage()}");
    }
} else {
    // Если запрос не POST, перенаправляем на главную страницу
    redirect('/');
}

