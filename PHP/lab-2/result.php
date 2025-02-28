<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат работы get_headers</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://mospolytech.ru/upload/medialibrary/5fa/Logo_Polytech_rus_main.jpg" alt="Логотип МосПолитеха">
        </div>
        <h1>Результат работы get_headers</h1>
        <a href="index.php" class="btn">Перейти на главную страницу</a>
    </header>

    <main>
        <?php
        $url = "https://httpbin.org/get";
        $headers = get_headers($url);
        ?>
        <textarea rows="10" cols="50">
        <?php 
            if ($headers) {
                foreach ($headers as $header) {
                    echo htmlspecialchars($header) . "\n";
                }
            } else {
                echo "Не удалось получить данные.";
            }
        ?>
        </textarea>
    </main>

    <footer>
    <?php
        $textElements = [
            "Сегодня отличный день для изучения PHP!",
            "Никогда не сдавайтесь!",
            "Код — это поэзия.",
            "Учитесь, пробуйте, ошибайтесь и снова учитесь.",
            "PHP — это весело!",
            "Случайная цитата: «Лучше сделать и пожалеть, чем не сделать и пожалеть.»",
            "Вдохновение приходит во время работы.",
            "Каждая проблема — это возможность научиться чему-то новому."
        ];

        $textElement = $textElements[array_rand($textElements)];
        echo "<p>$textElement</p>";
        ?>
    </footer>
</body>
</html>