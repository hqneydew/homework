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
<h1 class="display-8">Рекомендованные фильмы</h1>
</div>
<div class = "row">
<div class = "col"><br>
<p class="h2">Призрачная красота (2016)</p><br>
<img src="film1.jpg" class="img-fluid"><br><br>
              
           <p>Успешный и креативный Говард Инлет (Уилл Смит) впадает в глубокую депрессию после смерти шестилетней дочери. Его коллеги и друзья пытаются помочь ему, наняв трех актеров, чтобы они вмешались в его жизнь. Они должны изобразить три абстрактных концепции: Любовь (Кира Найтли), Смерть (Хелен Миррен) и Время (Джейкоб Латимор). Ведь когда-то сам Говард и сказал: «Мы жаждем любви, мы хотим, чтобы у нас было больше времени, и мы боимся смерти».</p>
 </div>
  </div>
 </div>
 <div class = "row">
 <div class = "col"><br>
 <p class="h2">Перед закатом (2004)</p><br><br>
 <img src="film2.jpg" class="img-fluid"><br><br>
   
           <p>Фильм исследует интересный психологический механизм человека – страх перед собственным счастьем. Когда американец Джесси знакомится с француженкой Селин, они оба понимают, что созданы друг для друга. Вот только на следующую встречу девушка не приходит, и связь обрывается. Но через девять лет жизнь дает им еще один шанс. Как написал Николай Гоголь, «твое от тебя не уйдет». Однако даже слова классика – не повод добровольно отказываться от любви. Фильм подойдет всем, кто боится сделать первый шаг в отношениях и изменить свою жизнь.</p>               
</div>
</div>
<div class = "row">
<div class = "col"><br>
<p class="h2">Красотка на всю голову (2018)</p><br><br>
<img src="film3.jpg" class="img-fluid"><br><br>      
 
           <p>Отличная комедия о важности самооценки с обаятельной Эми Шумер в главной роли. Рене мечтает об идеальной фигуре и тратит все силы на изнуряющие тренировки и диеты. Отчаявшись, она падает с велотренажера… а приходит в себя уже в теле потрясающей блондинки с модельной внешностью. Теперь-то ей по плечу и карьера, и спорт, и, конечно, любовь! Вот только Рене забывает, что чудес не существует, а все перевоплощения, как и преграды, существуют лишь у нее в голове.</p><br><br>          
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
