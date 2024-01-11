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
?>
<header class="container">
<div class="row">
<div class="logo">
    <img src="logo.jpg" alt="логотип">
  </div>
<div class ="title">
<h1>Сделай свою жизнь лучше!</h1>
</div>
</div>
</header>
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
<main class = "flex">
<div class = "row">
<h1 class="display-6">Рекомендованные к прочтению книги</h1><br><br><br><br><br>
</div>
<div class = "row">
<br><br><br>
<p class="h2">1. Даниэль Канеман, «Думай медленно, решай быстро»</p>
<p align="justify">Мы часто принимаем нерациональные решения — под влиянием момента или из-за когнитивных ошибок. Канеман считает, что полагаться на интуицию, когда вокруг нет очевидных и стабильных закономерностей, — крайне недальновидно, поэтому учит отслеживать собственные ошибки в мышлении, рассуждать и принимать решения правильно.</p><br>
<img src="book1.jpg" class="img-fluid"><br><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<p class="h2">2. Джон Кабат-Зинн, «Куда бы ты ни шел — ты уже там»</p>
<p align="justify">Эта книга — гид по осознанной медитации. Джон Кабат-Зинн считает, что медитация нужна не только для того, чтобы сосредоточиться и успокоиться, — она помогает увидеть жизненный путь, по которому вы идете, и принять его.
</p><br>
<img src="book2.jpg" class="img-fluid"><br><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<br><br>
<p class="h2">3. Виктор Франкл, «Сказать жизни да!»</p>
<p align="justify">Это биографическая книга австрийского психотерапевта Виктора Франкла о его жизни в концлагерях. Именно там он разработал логотерапию — «терапию смыслом жизни». Франкл наблюдал за людьми, которые оказались в невыносимых обстоятельствах, и пришел к выводу: выживают те, кому есть ради чего жить. 
</p><br>
<img src="book3.jpg" class="img-fluid"><br><br><br>
</div> 
</div> 
</div>
</div>
</div>
<footer class = "footer">
<div class = "row">
<div class ="col">
Номер службы психологической помощи: 8-800-2000-122
</div>
</div>
</footer>
</body>
</html>
