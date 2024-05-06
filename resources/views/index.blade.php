<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEOMAP</title>
    <link rel="stylesheet" href="/resources/css/app.css" />
    <link rel="stylesheet" href="/public/js/leaflet.css" />
</head>

<body>
    <header>
        <div class="logo"><img src="/public/img/logo.jpg"></div>
        <nav>
            <ul>
                <li><a href="/public/home">Главная</a></li>
                <li><a href="/public/home/personal_account">Личный кабинет</a></li>
                <li><a href="/public/">Выход</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="map"></div>
        <p id="distance"></p>
        <div id="popup-form">
            <h2>Добавить комментарий</h2>
            <form id="comment-form">
                <input type="text" id="username" placeholder="Ваше имя" required><br>
                <textarea id="comment" placeholder="Ваш комментарий" required></textarea><br>
                <label for="color">Выберите цвет метки:</label>
                <input type="color" id="color" value="#ff0000"><br>
                <button type="submit">Отправить</button>
            </form>
        </div>

        <button id="clear-markers">Очистить метки</button>

    </main>
    <footer>
        <p>&copy; 2024 GEOMAP.</p>
    </footer>
    <script src="/public/js/leaflet.js"></script>
    <script src="/public/js/users.js"></script> <!-- Файл с данными пользователей и метками -->
    <script src="/public/js/app.js"></script> <!-- Файл с JavaScript-кодом -->
</body>

</html>