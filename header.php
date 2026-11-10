<?php
$coffeeShopName = 'Аромат';
$pageTitle = isset($pageTitle) ? $pageTitle : 'Кофейня «Аромат»';
$phoneNumber = '+79320512554';
$phoneNumberTitle = '+7 (932) 051-25-54';
$emailNumber = 'arseniy.konoplev@gmail.com';
$address = 'г. Москва, ул. Кофейная, д. 15';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <div class="container header__inner">
        <a href="index.php" class="logo"><?php echo $coffeeShopName; ?></a>
        <nav>
            <ul class="nav">
                <li><a href="index.php" class="active">Обратная связь</a></li>
                <li><a href="login.php">Вход</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container main-content">