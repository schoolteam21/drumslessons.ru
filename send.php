<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Уроки игры на барабанах</title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>
<header class="small-header" id="top">
    <h2 align="center">Уроки игры на барабанах</h2>
</header>
<div class="primary-content t-border">
<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 2019-03-06
 * Time: 01:14
 */
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
/*
 * Convert special characters
*/
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
/*
 * Convert "<" в '&lt;' and others.
 * Decode url, if someone adds it to the form.
 */
$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);

/*
 * Delete spaces
 */
$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);

mail("info@drumslessons.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email.". Номер телефона: ".$phone ,"From: info@drumslessons.ru \r\n");
if (mail("info@drumslessons.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email.". Номер телефона: ".$phone ,"From: info@drumslessons.ru \r\n"))
{
    echo "<div class=\"signin\" id=\"signin\">Сообщение успешно отправлено</div>";
} else {
    echo "<div class=\"signin\" id=\"signin\">При отправке сообщения возникла ошибка</div>";
}
?>
    <a href="../">Вернуться на главную &raquo;</a>
</div>
</body>
