<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://mospolytech.ru/upload/medialibrary/5fa/Logo_Polytech_rus_main.jpg" alt="Логотип МосПолитеха">
        </div>
        <h1>Форма обратной связи</h1>
        <a href="result.php" class="btn">Перейти на страницу с результатом</a>
    </header>

    <main>
        <form action="https://httpbin.org/post" method="POST">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">E-mail пользователя:</label>
            <input type="email" id="email" name="email" required>

            <label for="type">Тип обращения:</label>
            <select id="type" name="type" required>
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
                <option value="thanks">Благодарность</option>
            </select>

            <label for="message">Текст обращения:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <label>Вариант ответа:</label>
            <div>
                <input type="checkbox" id="sms" name="response_type[]" value="sms">
                <label for="sms">SMS</label>
            </div>
            <div>
                <input type="checkbox" id="email_response" name="response_type[]" value="email">
                <label for="email_response">E-mail</label>
            </div>

            <button type="submit">Отправить</button>
        </form>

        
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