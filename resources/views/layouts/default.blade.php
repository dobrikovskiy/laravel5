<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <!-- Подключение Bootstrap CSS (опционально) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Шапка -->
        <header class="row">
            <h1>Мой сайт</h1>
        </header>

        <!-- Основной контент -->
        <main class="row">
            @yield('content')
        </main>

        <!-- Подвал -->
        <footer class="row">
            <p>&copy; 2023 Мой сайт</p>
        </footer>
    </div>

    <!-- Подключение Bootstrap JS (опционально) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>