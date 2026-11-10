<?php
$validLogin = 'admin';
$validPassword = '12345';
$success = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($login === $validLogin && $password === $validPassword) {
        $success = true;
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход — Кофейня «Аромат»</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
    <body>
        <div class="login-page">
            <?php if ($success): ?>
                <div class="login-form">
                    <h1 class="login-form__title">Авторизация прошла успешно!</h1>
                    <p class="login-form__back"><a href="index.php">Вернуться</a></p>
                </div>
            <?php else: ?>
                <form class="login-form" method="POST">
                    <h1 class="login-form__title">Вход в личный кабинет</h1>
                    <?php if ($error !== ''): ?>
                        <p class="login-form__error"><?php echo htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" id="login" name="login" placeholder="Ваш логин" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="yes">
                        Запомнить меня
                    </label>
                    <button type="submit" class="btn">Войти</button>
                    <p class="login-form__back"><a href="index.php">Вернуться</a></p>
                </form>
            <?php endif; ?>
        </div>
    </body>
</html>