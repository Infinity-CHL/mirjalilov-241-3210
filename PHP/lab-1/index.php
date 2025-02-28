<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>241-3210 Mirjalilov Javohir</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://mospolytech.ru/local/templates/main/assets/img/logo.svg" alt="Логотип МосПолитеха">
        </div>
        <div class="title">
            <h1>Hello, World!</h1>
        </div>
    </header>

    <main>
        <?php
        $message = "Hello, World";
        echo "<p>$message</p>";
        ?>
    </main>

    <footer>
    <?php
        $randomElements = [
            "Сегодня отличный день для изучения PHP!",
            "Никогда не сдавайтесь!",
            "Код — это поэзия.",
            "Учитесь, пробуйте, ошибайтесь и снова учитесь.",
            "PHP — это весело!",
            "Случайная цитата: «Лучше сделать и пожалеть, чем не сделать и пожалеть.»",
            "Вдохновение приходит во время работы.",
            "Каждая проблема — это возможность научиться чему-то новому."
        ];

        $randomElement = $randomElements[array_rand($randomElements)];
        echo "<p>$randomElement</p>";
        ?>
    </footer>
</body>
</html>