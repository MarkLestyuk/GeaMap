<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/resources/css/app.css" />

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
</head>

<body>
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

</html>