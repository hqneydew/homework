<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<title>Психология</title>
</head>
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
<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<body>

<form class="card" action="src/actions/login.php" method="post">
    <h2>Вход</h2>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <label for="email">
        E-mail
        <input
            type="text"
            id="email"
            name="email"
            placeholder="email@example.example"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>

    <label for="password">
        Пароль
        <input
            type="password"
            id="password"
            name="password"
            placeholder="******"
        >
    </label>

    <button
        type="submit"
        id="submit"
    >Продолжить</button>
</form>

<p>У меня еще нет <a href="/3.php">аккаунта</a></p>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>