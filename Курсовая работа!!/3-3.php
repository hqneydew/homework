<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<title>Психология</title>
</head>
<body class="body-top">
<?php
require_once __DIR__ . '/src/actions/helpers.php';

checkAuth();

$user = currentUser();
?>
<div id="menu">
<nav class="nav nav-pills flex-column flex-sm-row">
<a class="flex-sm-fill text-sm-center nav-link" href="1.php">Статьи</a>
<a class="flex-sm-fill text-sm-center nav-link" href="4.php">Цитаты</a>
<a class="flex-sm-fill text-sm-center nav-link" href="5.php">Фильмы</a>
<a class="flex-sm-fill text-sm-center nav-link" href="2.php">Книги</a>
    <?php if (isset($_SESSION['user']['user_id'])) : ?>
        <a class="flex-sm-fill text-sm-center nav-link" href="3-3.php"><?= $_SESSION['user']['name'] ?></a>
    <?php else : ?>
        <a class="flex-sm-fill text-sm-center nav-link" href="3.php">Войти/Зарегистрироваться</a>
    <?php endif; ?>

</nav>
</div>
<body>
<link rel="stylesheet" href="style.css">
<div class="container mt-4">


<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<body>

<div class="card home">
    <h1>Добро пожаловать, <?php echo $user['name'] ?>!</h1>
    <button id="editNameButton" role="button">Изменить имя</button>
    <form id="editNameForm" action="src/actions/editName.php" method="post" style="display: none;">
        <label for="newName">Новое имя:</label>
        <input type="text" id="newName" name="newName">
        <button type="submit">Сохранить</button>
    </form>
    <?php if ($user['role_id'] == 1) : ?>
        <button id="userListButton" role="button">Список пользователей</button>
        <div id="userList" style="display: none;">
            <h2>Список пользователей</h2>
            <?php
            $allUsers = getAllUsers();
            echo '<ul>';
            foreach ($allUsers as $userData) {
                echo '<li><a href="/src/actions/userDetails.php?user_id=' . $userData['user_id'] . '">' . $userData['name'] . '</a></li>';
            }
            echo '</ul>';
            ?>
        </div>
    <?php endif; ?>
    <form action="src/actions/logout.php" method="post">
        <button role="button">Выйти из аккаунта</button>
    </form>
</div>

<?php include_once __DIR__ . '/components/scripts.php' ?>
<script>
    document.getElementById('editNameButton').addEventListener('click', function() {
        document.getElementById('editNameForm').style.display = 'block';
    });
    document.getElementById('userListButton').addEventListener('click', function() {
        document.getElementById('userList').style.display = 'block';
    });
</script>
</body>
</html>
</body>
</html>
