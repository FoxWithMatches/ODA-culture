<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];

$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);

$fio = urldecode($fio);
$tel = urldecode($tel);

$fio = trim($fio);
$tel = trim($tel);

// echo $fio;
// echo "<br>";
// echo $tel;

if (mail("hello@oda-culture.store", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$tel , "From: hello@oda-culture.store \r\n")) {
    echo "200";
} else {
    echo "error";
}
?>