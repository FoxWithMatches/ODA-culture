<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$name = $_POST['name'];

$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$name = htmlspecialchars($name);

$fio = urldecode($fio);
$tel = urldecode($tel);
$name = urldecode($name);

$fio = trim($fio);
$tel = trim($tel);
$name = trim($name);


?>

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

<?php
if (mail("hello@oda-culture.store", "Клиент", "ФИО: ".$fio.". Телефон: ".$tel." Сообщение: ".$name, "From: hello@oda-culture.store \r\n")) {
    ?>

    <div class="page">
        <div>
            <header id="header">
                <a href="/index.html">
                    <img class="logo" src="/img/v1.svg" alt="logotype">
                </a>
            </header>
    <div class="partners">
        <div class="description-partners">
            <h4>Ваша заявка отправлена</h4>
            <p>Мы рады, что движение ODA culture вызвало у вас интерес. <br>Наш менеджер свяжется с вами в ближайшее время. <br>Благодарим за обращение!</p>
            <img src="/img/girl.svg" alt="woman">
        </div>

    </div>

        </div>
</body>

</html>

    <!-- echo "$fio, ваша заявка отпарвлена. Менеджер ODA culture  свяжется с вами в ближайшее время. Спасибо за обращение!"; -->

    <?php
} else {
    echo "error";
}
?>
