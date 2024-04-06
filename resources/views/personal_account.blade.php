<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Личный кабинет</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    h1 {
        text-align: center;
    }
    .profile {
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
    }
    .profile img {
        border-radius: 50%;
        max-width: 100px;
        display: block;
        margin: 0 auto 10px;
    }
    .profile h2 {
        text-align: center;
        margin-bottom: 10px;
    }
    .profile p {
        text-align: center;
        margin: 5px 0;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Личный кабинет</h1>

    <div class="profile">
        <img src="https://via.placeholder.com/150" alt="Профиль">
        <h2>{{ Auth::user()->name }}</h2>
        <p>{{ Auth::user()->email }}</p>
        <p>Дата регистрации: {{ Auth::user()->created_at }}</p>
    </div>


</div>

</body>
</html>
