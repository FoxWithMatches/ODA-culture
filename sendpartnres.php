<?php

$recaptcha = $_POST['g-recaptcha-response'];

if(!empty($recaptcha)) {
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    $secret = '6Lf-Q5khAAAAAGiqxJBXwyTfP4UMhkes-4u7ABC0';
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
    $curlData = curl_exec($curl);
    curl_close($curl); 
    $curlData = json_decode($curlData, true);
    
    if($curlData['success']) {

$partners = $_POST['partners'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$call = $_POST['call'];
$text = $_POST['text'];

$partners = htmlspecialchars($partners);
$company = htmlspecialchars($company);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$call = htmlspecialchars($call);
$text = htmlspecialchars($text);

$partners = urldecode($partners);
$company = urldecode($company);
$phone = urldecode($phone);
$email = urldecode($email);
$call = urldecode($call);
$text = urldecode($text);

$partners = trim($partners);
$company = trim($company);
$phone= trim($phone);
$email = trim($email);
$call = trim($call);
$text = trim($text);

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
if (mail("hello@oda-culture.store", "Партнеры", "ФИО: ".$partners.". Компания: ".$company." Телефон: ".$phone." E-mail: ".$email." Комфортный способ связи: ".$call." Сообщение: ".$text, "From: hello@oda-culture.store \r\n")) {
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

    <div class="page">
        <div>
            <header id="header">
                <a href="/index.php">
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

    <?php
} else {
    echo "error";
}} else {
    echo "Подтвердите, что вы не робот и попробуйте еще раз";
} 
} else {
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

    <div class="page">
        <div>
            <header id="header">
                    <img class="logo" src="/img/v1.svg" alt="logotype">
            </header>
    <div class="partners">
        <div class="description-partners">
            <h4>Поставьте галочку, что вы не робот</h4>
            <img src="/img/girl.svg" alt="woman">
        </div>
    </div>
    </div>
</body>
</html>

    <?php
}
?>