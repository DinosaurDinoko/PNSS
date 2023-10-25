<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>UPPNSS</title>
</head>
<body>
<header>
    <nav class="nav">
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/Subdivisions') ?>">Подразделения</a>
            <a href="<?= app()->route->getUrl('/AddUser') ?>">Добавление пользователя</a>
            <a href="<?= app()->route->getUrl('/Calculations') ?>">Расчеты</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a> <img class="img_user" src="/pnssssssssss/public/assets/img/<?= app()->auth::user()->photo ?>" alt="">
            <form  method="get" action="<?= app()->route->getUrl('/searchdb') ?>"  id="searchform">
                <input  type="text" name="search">
                <input class="search" type="submit" name="submit" value="Search">
            </form>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>
</body>
</html>