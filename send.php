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
 * Для целей защиты своего сайта нужно провести эти переменные через несколько фильтров - функций php.
 * Первая функция преобразует все символы, которые пользователь попытается добавить в форму:
*/
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
/*
 * При этом новые переменные в php не создаются, а используются уже имеющиеся. Что сделает фильтр, он преобразует символ "<" в '&lt;'. Также он поступить с другими символами, встречающимися в html коде.
 * Вторая функция декодирует url, если пользователь попытается его добавить в форму.
 */
$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);

/*
 * Третей функцией мы удалим пробелы с начала и конца строки, если таковые имеются:
 */
$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);

//if(strlen($phone) <= 10)
//    echo "Некорректный номер телефона\n";


mail("lerakenny@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email.". Номер телефона: ".$phone ,"From: info@drumslessons.ru \r\n");
if (mail("lerakenny@mail.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email.". Номер телефона: ".$phone ,"From: info@drumslessons.ru \r\n"))
{
    echo "<div class=\"signin\" id=\"signin\">Сообщение успешно отправлено</div>";
} else {
    echo "<div class=\"signin\" id=\"signin\">При отправке сообщения возникла ошибка</div>";
}
?>
    <a href="../">Вернуться на главную &raquo;</a>
</div>
</body>