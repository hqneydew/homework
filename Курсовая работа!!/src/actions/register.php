<?php

require_once __DIR__ . '/../helpers.php';

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
if (isset($_SESSION['user']['user_id'])) {
    header("Location: 3-3.php");
    exit();
}
if (empty($name)) {
    setValidationError('name', 'Неверное имя');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Указана неправильная почта');
}

if (empty($password)) {
    setValidationError('password', 'Пароль пустой');
}

if ($password !== $passwordConfirmation) {
    setValidationError('password', 'Пароли не совпадают');
}

if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('email', $email);
    redirect('/register.php');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, :role_id)";

// Добавляем role_id и устанавливаем его в 2 для новых пользователей (роль 'user')
$params = [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'role_id' => 2, // Роль 'user'
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);

    // Получаем ID только что зарегистрированного пользователя
    $userId = $pdo->lastInsertId();

    // Получаем данные пользователя из базы данных
    $user = findUserById($userId);

    // Сохраняем пользователя в сессии
    $_SESSION['user'] = $user;

} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/3-3.php');
