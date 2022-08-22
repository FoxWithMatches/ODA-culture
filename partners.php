<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/img/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Для партнеров</title>
</head>

<body>

    <div class="page">
        <div>
            <header id="header">
                <a href="/index.php">
                    <img class="logo" src="/img/v1.svg" alt="logotype">
                </a>
            </header>
    <div class="partners">
        <div class="description-partners">
            <h4>Станем партнерами</h4>
            <p>Мы рады, что движение ODA culture вызвало у вас интерес. <br>Наша компания открыта для сотрудничества и выстраивания долгосрочных отношений. <br>Для более близкого знакомства - заполните, пожалуйста, форму ниже</p>
            <p>С вами свяжется ведущий менеджер по работе с партнерами для обсуждения деталей.</p>
            <img src="/img/girl.svg" alt="woman">
        </div>

        <div class="form-partners">
                <h4>Оставьте заявку</h4>
                <form action="sendpartnres.php" method="post">
                    <input class="input" type="text" name="partners" placeholder="Ваше имя" required>
                    <input class="input" type="text" name="company" placeholder="Ваша организация">
                    <input class="input" type="tel" name="phone" placeholder="Номер телефона" required>
                    <input class="input" type="text" name="email" placeholder="Адрес электронной почты">
                    <input class="input" type="text" name="call" placeholder="Комфортный способ связи: звонок/ мессенджер">
                    <textarea class="input" name="text"
                        placeholder="Комментарий (Ваше предложение)"></textarea><br>
                    <div class="g-recaptcha" data-sitekey="6Lf-Q5khAAAAAH4pZDPR9ZEssB6mrq2y-S0iUfpK"></div>

                    <button class="order-btn" type="submit">Отправить</button>
                </form>
        </div>
    </div>
    
    <?php
    require("components/footer.php");
    ?>