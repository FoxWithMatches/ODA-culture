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
        $fio = $_POST['fio'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        $fio = htmlspecialchars($fio);
        $tel = htmlspecialchars($tel);
        $message = htmlspecialchars($message);

        $fio = urldecode($fio);
        $tel = urldecode($tel);
        $message = urldecode($message);

        $fio = trim($fio);
        $tel = trim($tel);
        $message = trim($message);

    if (isset($_POST['submit'])) {
        $fio = trim($_POST['fio']);
        $tel = trim($_POST['tel']);
        $message = trim($_POST['message']);

        if (empty($fio)) {
            $errors[] = 'Не указано имя';
        }
        elseif (empty($tel)) {
            $errors[] = 'Не указан телефон';
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "$error";
            } 
        }
        else {
            $insertDB = true;
        }
    }

    if ($insertDB) {
    $host = 'localhost';
    $user = 'adminoda';
    $password = 'studentkainey17';
    $database = 'oda';

        $mysqli = new mysqli($host, $user, $password, $database);

        if(!$mysqli){ 
            echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
            echo 'Код ошибки: ' . mysqli_connect_errno();
        }
        else{ 
            $query = "INSERT INTO orders(id, name, phone, message) VALUES (NULL,'$fio', '$tel', '$message')";
            $result = $mysqli->query($query); 
        }

        if(!$result){ 
            echo 'Ошибка запроса: ' . mysqli_error($mysqli) . '<br>';
            echo 'Код ошибки: ' . mysqli_errno($mysqli);
        }
        else {}
    }
?>

<?php
if (mail("hello@oda-culture.store", "Клиент", "ФИО: ".$fio.". Телефон: ".$tel." Сообщение: ".$message, "From: hello@oda-culture.store \r\n")) {
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
    }
} else {
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

