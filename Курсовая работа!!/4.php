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
<h1 class="display-7">Цитаты, которые заставят тебя задуматься</h1><br>
</div>
<div class = "row">
<br><br><br>
<p class="h2">«Наша зависимость делает нас рабом, особенно зависимость нашего самоуважения. Если вы нуждаетесь в ободрении и похвале от каждого человека, вы каждого делаете вашим судьей.»</p>
<p align="justify">Фредерик Перлз</p><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<p class="h2">«Если индивид способен на плодотворную любовь, он любит также и себя; если он способен любить только других, он не способен любить вообще.»</p>
<p align="justify">Эрих Фромм</p><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<p class="h2">«Люди притягивают к себе не то, что хотят, а то, чем они сами являются. Божественное начало, определяющее нашу жизнь, находится в нас самих. Всё, чего достигает человек, является прямым результатом его собственных мыслей.»</p>
<p align="justify">Дейл Карнеги</p><br>
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
