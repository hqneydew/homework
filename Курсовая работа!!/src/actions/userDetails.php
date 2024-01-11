<?php
require_once __DIR__ . '/../helpers.php';
checkAuth();
$userId = $_GET['user_id'] ?? null;
$user = currentUser();

if (!$userId) {
    die("Отсутствует информация о пользователе");
    exit;
}


$userData = findUserById($userId);


if (!$userData) {
    die("Отсутствует информация о пользователе");
    exit;
}

echo '<h2>Информация о пользователе</h2>';
echo '<p>ID: ' . $userData['user_id'] . '</p>';
echo '<p>Имя: ' . $userData['name'] . '</p>';
echo '<p>Email: ' . $userData['email'] . '</p>';
echo '<p>Роль: ' . ($userData['role_id'] == 1 ? 'Администратор' : 'Пользователь') . '</p>';

if ($user['role_id'] == 1){
    echo '<form action="/src/actions/deleteUser.php" method="post">';
    echo '<input type="hidden" name="userId" value="' . $userData['user_id'] . '">';
    echo '<button type="submit" onclick="return confirm(\'Вы уверены, что хотите удалить пользователя?\')">Удалить пользователя</button>';
    echo '</form>';
}

?>

