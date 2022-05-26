<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link href="../css/normalize.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/flatpickr.min.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">

    <header class="main-header">
        <div class="main-header__container container">
            <h1 class="visually-hidden">YetiCave</h1>
            <a class="main-header__logo" href="index.php">
                <img src="../img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
            </a>
            <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru" autocomplete="off">
                <input type="search" name="search" placeholder="Поиск лота">
                <input class="main-header__search-btn" type="submit" name="find" value="Найти">
            </form>
            <a class="main-header__add-lot button" href="add.php">Добавить лот</a>

            <nav class="user-menu">
                <?php
                if($is_auth == 1)
                {
                    ?>
                    <div class="user-menu__image">
                        <img src="../img/<?=$arrayusers[0]['avatar']?>" width="40" height="40" alt="Пользователь">
                    </div>

                    <div class="user-menu__login">
                        <div class="user-menu__logged">
                            <p><?=$user_name?></p>
                        </div>

                        <div class="user-menu__logged">
                            <a class="user-menu__logged" href="logout.php">ВЫХОД</a>
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <ul class="user-menu__list">
                        <li class="user-menu__item">
                            <a href="signup.php">Регистрация</a>
                        </li>
                        <li class="user-menu__item">
                            <a href="login.php">Вход</a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </nav>
        </div>
    </header>
<main class="container">
    <nav class="nav">
        <ul class="nav__list container">
            <?php
            foreach($arraycategory as $cat)
            {
                ?>
                <li class="nav__item">
                <a href="pages/all-lots.html"><?=$cat['name']?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <?=$page_content?>
</main>
</div>

<footer class="main-footer">
    <nav class="nav">
        <ul class="nav__list container">
            <?php
            foreach ($arraycategory as $category)
            {
                ?>
                <li class="nav__item">
                    <a href="pages/all-lots.html"><?=$category["name"]?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <div class="main-footer__bottom container">
        <div class="main-footer__copyright">
            <p>© 2022 YetiCave</p>
            <p>Интернет-аукцион сноубордического и горнолыжного снаряжения</p>
        </div>
        <div class="main-footer__social social">
            <span class="visually-hidden">Мы в соцсетях:</span>
            <a class="social__link social__link--facebook" href="https://www.facebook.com/profile.php?id=100009200886170">
                <span class="visually-hidden">Facebook</span>
                <svg width="27" height="27" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><circle stroke="#879296" fill="none" cx="13.5" cy="13.5" r="12.667"/><path fill="#879296" d="M14.26 20.983h-2.816v-6.626H10.04v-2.28h1.404v-1.364c0-1.862.79-2.922 3.04-2.922h1.87v2.28h-1.17c-.876 0-.972.322-.972.916v1.14h2.212l-.245 2.28h-1.92v6.625z"/></svg>
            </a>
            <span class="visually-hidden">,</span>
            <a class="social__link social__link--instagram" href="https://www.instagram.com/mikhailov_dmitryrus/?hl=ru">
                <span class="visually-hidden">Instagram</span>
                <svg width="27" height="27" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><circle stroke="#879296" fill="none" cx="13.5" cy="13.5" r="12.687"/><path fill="#879296" d="M13.5 8.3h2.567c.403.002.803.075 1.18.213.552.213.988.65 1.2 1.2.14.38.213.778.216 1.18v5.136c-.003.403-.076.803-.215 1.18-.213.552-.65.988-1.2 1.2-.378.14-.778.213-1.18.216h-5.135c-.403-.003-.802-.076-1.18-.215-.552-.214-.988-.65-1.2-1.2-.14-.38-.212-.78-.215-1.182V13.46v-2.566c.003-.403.076-.802.214-1.18.213-.552.65-.988 1.2-1.2.38-.14.778-.212 1.18-.215H13.5m0-1.143h-2.616c-.526.01-1.048.108-1.54.292-.853.33-1.527 1-1.856 1.854-.184.493-.283 1.014-.292 1.542v5.232c.01.526.108 1.048.292 1.54.33.853 1.003 1.527 1.855 1.856.493.184 1.015.283 1.54.293H16.117c.527-.01 1.048-.11 1.54-.293.854-.33 1.527-1.003 1.856-1.855.184-.493.283-1.015.293-1.54V13.46v-2.614c-.01-.528-.11-1.05-.293-1.542-.33-.853-1.002-1.525-1.855-1.855-.493-.185-1.014-.283-1.54-.293-.665.01-.89 0-2.617 0zm0 3.093c-2.51.007-4.07 2.73-2.808 4.898 1.26 2.17 4.398 2.16 5.645-.017.285-.495.434-1.058.433-1.63-.006-1.8-1.47-3.256-3.27-3.25zm0 5.378c-1.63-.007-2.64-1.777-1.82-3.185.823-1.41 2.86-1.4 3.67.017.18.316.276.675.278 1.04.006 1.177-.95 2.133-2.128 2.128zm4.118-5.524c0 .58-.626.94-1.127.65-.5-.29-.5-1.012 0-1.3.116-.067.245-.102.378-.102.418-.005.76.333.76.752z"/></svg>
            </a>
            <span class="visually-hidden">,</span>
            <a class="social__link social__link--vkontakte" href="https://vk.com/foxterru">
                <span class="visually-hidden">Вконтакте</span>
                <svg width="27" height="27" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><circle stroke="#879296" fill="none" cx="13.5" cy="13.5" r="12.666"/><path fill="#879296" d="M13.92 18.07c.142-.016.278-.074.39-.166.077-.107.118-.237.116-.37 0 0 0-1.13.516-1.296.517-.165 1.208 1.09 1.95 1.58.276.213.624.314.973.28h1.95s.973-.057.525-.837c-.38-.62-.865-1.17-1.432-1.626-1.208-1.1-1.043-.916.41-2.816.886-1.16 1.236-1.86 1.13-2.163-.108-.302-.76-.214-.76-.214h-2.164c-.092-.026-.19-.026-.282 0-.083.058-.15.135-.195.225-.224.57-.49 1.125-.8 1.656-.973 1.61-1.344 1.697-1.51 1.59-.37-.234-.272-.975-.272-1.433 0-1.56.243-2.202-.468-2.377-.32-.075-.647-.108-.974-.098-.604-.052-1.213.01-1.793.186-.243.116-.438.38-.32.4.245.018.474.13.642.31.152.303.225.638.214.975 0 0 .127 1.832-.302 2.056-.43.223-.692-.167-1.55-1.618-.29-.506-.547-1.03-.77-1.57-.038-.09-.098-.17-.174-.233-.1-.065-.214-.108-.332-.128H6.485s-.312 0-.42.137c-.106.135 0 .36 0 .36.87 2 2.022 3.868 3.42 5.543.923.996 2.21 1.573 3.567 1.598z"/></svg>
            </a>
        </div>
        <a class="main-footer__add-lot button" href="add.php">Добавить лот</a>
    </div>
</footer>

<script src="flatpickr.js"></script>
<script src="script.js"></script>
</body>
</html>
