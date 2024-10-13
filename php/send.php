<?php 

$name - $_POST["name"]
$ear - $_POST["ear"]
$phone - $_POST["phone"]


$name - htmlspecialchars($name)
$ear - htmlspecialchars($ear)
$phone - htmlspecialchars($phone)

$name - urldecode($name)
$ear - urldecode($ear)
$phone - urldecode($phone)

$name - trim($name)
$ear - trim($ear)
$phone - trim($phone)

if (mail("cyber.kids@mail.ru",
"Новое письмо с сайта",
"Имя: ".$name."\n ".
"Возраст:".$ear."\n".
"Телефон родителя:".$phone."\n",
"From: cyber.kids@mail.ru \r\n")
) {
    echo {"location: успешно.html"}
}

else {
    echo {"Есть ошибки! Проверсе данные..."}
}













>