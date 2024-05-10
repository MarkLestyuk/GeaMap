<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/resources/css/app.css" />
    <link rel="stylesheet" href="/public/js/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <header>
        <div class="logo"><img src="/public/img/logo.jpg"></div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/public/home">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/public/home/personal_account">Личный кабинет</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/public/">Выход</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <nav>
            <ul>
                <li><a href="/public/home">Главная</a></li>
                <li><a href="/public/home/personal_account">Личный кабинет</a></li>
                <li><a href="/public/">Выход</a></li>
            </ul>
        </nav> -->
    </header>
    </head>


    <div class="container">
        <h1>Личный кабинет</h1>
        <div class="profile">
            <img src="/public/img/free-icon-user-profile-3364044.png" alt="Профиль">
            <h2>{{ Auth::user()->name }}</h2>
            <p>{{ Auth::user()->email }}</p>
            <p>Дата регистрации: {{ Auth::user()->created_at }}</p>
        </div>
        <ul id="markers-list"></ul>


    </div>
    <footer>
        <p>&copy; 2024 GEOMAP.</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/public/js/leaflet.js"></script>
    <script src="/public/js/users.js"></script> <!-- Файл с данными пользователей и метками -->
    <script src="/public/js/app.js"></script> <!-- Файл с JavaScript-кодом -->
</html>