<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная карта с пользователями и метками</title>
    <link rel="stylesheet" href="/public/js/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
        <div class="logo">Логотип</div>
        <nav>
            <ul>
                <li><a href="/public/home">Главная</a></li>
                <li><a href="/public/home/personal_account">Личный кабинет</a></li>
                <li><a href="/public/">Выход</a></li>
            </ul>
        </nav>
        <style>
            body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

        </style>
    </header>
    <main>
        <div id="map"></div>
        
        <p id="distance"></p>



    </main>
    <footer>

    </footer>


    <script src="/public/js/leaflet.js"></script>
    <script src="/public/js/users.js"></script> <!-- Файл с данными пользователей и метками -->
    <script src="/public/js/app.js"></script> <!-- Файл с JavaScript-кодом -->
</body>
</html>
