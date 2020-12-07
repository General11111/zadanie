<?php

$recepient = "your@mail.ru";
$siteName = "Ajax-форма";

$name = trim($_POST["name"]);
$message = "Имя: $name;

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>