<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<h1 class="display-5">Статьи</h1>
<div class = "row">
<div class = "col">
<br>

<p class="h2">Можно ли взять и изменить свою точку зрения: отвечает психолог</p>
<p align="justify">Когда занимаемся рабочими делами, едим, разговариваем, засыпаем — всегда и везде мы о чем-то да думаем. За этот процесс отвечает наше мыслящее «Я», но существует также и наблюдающее «Я». Что их отличает? Как позиция наблюдателя влияет на умение принимать новые точки зрения? И что сделать, чтобы ее занять?</p>
<img src="img1.jpg" class="img-fluid"><br><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<p class="h2">Трагические события: как они влияют на психику и что помогает их пережить — 3 практики</p>
<p align="justify">Шторм, нападение, авария — при этих и других трагических событиях мы делаем все, чтобы выжить физически, но нередко забываем о выживании психологическом. Что отличает травматичные и стрессовые ситуации? От чего зависит наша реакция на них? И какие ресурсы необходимы, чтобы быстрее исцелить психику? Разбираемся вместе с травматерапевтом.
</p>
<img src="img2.jpg" class="img-fluid"><br><br>
</div>
</div> 
</div>
</div>
<div class = "row">
<div class = "col">
<p class="h2">Как получать удовольствие от повседневных дел: секреты позитивной психологии</p>
<p align="justify">Как сделать каждый день ярким, рутинные дела — приятными, а себя и родных — чуточку счастливее? Автор популярного блога Мария Долганова, ссылаясь на научные данные и живые примеры из своего опыта, делится с читателем секретами науки о счастье — позитивной психологии. 
</p><br>
<img src="img3.jpg" class="img-fluid"><br><br><br>
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

