<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma-rtl.min.css">
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/src/css/styles.css">
    <link rel="stylesheet" href="/src/css/media.css">
    <script src="src/js/pure.js"></script>
</head>
<body>
<header class="nav-box" id="mainId">
    <nav class="menu">
        <span class="hamburger" id="btn-menu" onclick="btnMenu()"></span>
        <ul class="menu-items">
            <li class="menu-item"><img src="/src/img/star.png"></li>
            <li class="menu-item"><a href="#mainId">Главная</a></li>
            <li class="menu-item"><a href="#achivmentId">Достижения</a></li>
            <li class="menu-item"><a href="#resumeId">Резюме</a></li>
            <li class="menu-item"><a href="#recommendationId">Рекомендации</a></li>
            <li class="menu-item"><a href="#contactsId">Контакты</a></li>
            <li class="menu-item"><img src="/src/img/star.png"></li>
        </ul>
    </nav>
</header>
<section class="container">
    <div class="bg-1">
        <div class="box-title">
            <h1 class="title-1">Дорогу молодым специалистам!</h1>
            <a class="about-us" href="#">О нас</a>
        </div>
        <div class="contacts-header">
            <span><a href="#url-to-social"><img class="social-header" src="/src/img/facebook.png" alt="Facebook"></a></span>
            <span><a href="#url-to-social"><img class="social-header" src="/src/img/telegram.png" alt="Telegram"></a></span>
            <span><a href="#url-to-social"><img class="social-header" src="/src/img/vk.png" alt="VK"></a></span>
        </div>
    </div>
</section>
<section class="container achivment" id="achivmentId">
    <h2 class="title-section">Личные Достижения</h2>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="column">
            <img class="circle" src="src/img/006-balloon.png" alt="balloon"/>
            <p class="little-title">Люблю животных</p>
            <p>Вырастил кошку, кота и собаку</p>
        </div>
        <div class="column">
            <img class="circle" src="src/img/010-blackboard.png" alt="blackboard"/>
            <p class="little-title">Окончил школу и колледж</p>
            <p>Учился в МБОУ СОШ №7 и окончил Ставропольский Колледж Связи Имени Петрова</p>
        </div>
        <div class="column">
            <img class="circle" src="src/img/008-blocks.png" alt="blocks"/>
            <p class="little-title">ЯРазработчик</p>
            <p>Занимаюсь самыми разными проектами от создания сайтов и скриптов до мобильных приложений и серверов</p>
        </div>
    </div>
</section>
<section class="container resume" id="resumeId">
    <h3 class="title-section">Резюме</h3>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="column">
            <img class="me-img" src="src/img/045-boy.png" alt="Me">
            <p class="little-title">Здравствуйте, меня зовут Василий, мне 21 год</p>
            <p class="about-me-text">Я родился в городе Ставрополе 9 апреля 1999 года, не помню в каком году окончил учебу в МБОУ СОШ №7.
                После школы ушел учиться в Ставропольский Колледж Связи, там я познакомился с
                людьми которые открыли для меня с программирование, а так же помогли развиваться дальше,
                на 3 курсе я уже выполнял дипломные работы для выпусников, а в начале 4 курса устроился
                на работу backend разработчиком, где я очень много работал с Oracle и PostgreSQL.</p>
            <button id="show" class="btn-show" onclick="btnToggle()">Показать</button>
            <p class="about-me-text display-none">На свой диплом я решил создать мессенджер, который мне дался на тот момент не малой кровью.
                Пришлось поднять свой ws сервер на php с помощью ratchet, два Application сервера, базу на PostgreSQL,
                и создать клиент для всего этого, клиент выполнил с помощью React.js и Electron.js.</p>
            <p class="about-me-text display-none">Так как военкомат не дремлет и мы живём в проклятом совке меня тут же загребли в армию,
                не дав мне и шанса избавиться от ненужной и вредной для кошелька и здоровья учебы в Ставрополе,
                я убыл к месту прохождения службы в г.Майкоп. С службой мне повезло, и на счёт службы всё.</p>
            <p class="about-me-text display-none">По прибытию со службы я "случайно" потерял свой военный билет и заказал его восстановление,
                и больше я с военкоматом не встречаюсь, и надеюсь что по этой счастливой случайности
                больше никогда с ним и не встречусь.</p>
            <p class="about-me-text display-none">Пришлось нелегко, меня попытались надуть в некоторых на первый взгляд очень даже в приличных команиях,
                но так как я по жизни победитель, мне очень повезло с службой, но увы, за всё нужно платить,
                место для постоянной работы я не нашел до сих пор.</p>
            <p class="about-me-text display-none">Но нет худа без добра, мы в 21 веке и так как я в IT, могу работать удалённо, занимался разработкой ботов, скриптов, созданием демонов,
                поддерживал сайты на Yii2, Laravel, CakePHP, почти дописал свой медиа-сервер, работующий в h.264 и ogg,
                написал пару мобильных приложений, и всё это время не пренебрегал обучением и своим развитием,
                познакомился с redis, python, его фреймворком django.</p>
            <button id="close" class="btn-close" onclick="btnToggle()">Скрыть</button>
        </div>
    </div>
</section>
<section class="container recommendation" id="recommendationId">
    <h3 class="title-section">Рекомендации</h3>
    <div class="columns" style="padding-top: 50px; padding-bottom: 50px;">
        <?php include 'views/recommendation.php' ?>
    </div>
</section>
<section class="container contacts" id="contactsId">
    <div class="columns">
        <div class="column is-half white">
            <h5 class="title-section">Мой адрес</h5>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae0359e487da9c9ebea41fd2faeaf11196844dce312d0c82e37b5fee5f8ba2b10&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="column is-half gray">
            <p class="form-section">Вы можете заказать звонок</p>
            <div class="form">
                <label>
                    <input class="input-text" type="text" placeholder="Ваше имя" name="name">
                </label>
                <label>
                    <input class="input-text" type="text" placeholder="Номер телефона" name="phone">
                </label>
                <button class="btn-submit" onclick="sendMail()">Отправить</button>
            </div>
        </div>
    </div>
</section>
<footer class="container">
    <div class="columns">
        <div class="column is-one-fifth">
            <span class="footer-boxes left">
                <img class="stars" src="/src/img/star.png">
            </span>
        </div>
        <div class="column is-three-fifths">
            <span><a href="#url-to-social"><img class="social" src="/src/img/facebook.png" alt="Facebook"></a></span>
            <span><a href="#url-to-social"><img class="social" src="/src/img/telegram.png" alt="Telegram"></a></span>
            <span><a href="#url-to-social"><img class="social" src="/src/img/vk.png" alt="VK"></a></span>
            <div>
                <p>
                    <a class="e-mail" href="mailto:volosovczov@gmail.com?subject=С вашего сайта">volosovczov@gmail.com</a>
                </p>
            </div>
        </div>
        <div class="column is-one-fifth">
             <span class="footer-boxes right">
                <img class="stars" src="/src/img/star.png">
            </span>
        </div>
    </div>
</footer>
</body>
</html>