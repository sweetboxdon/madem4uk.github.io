<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta http-equiv="Content-Language" content="ru" />
<title>Ваш заказ принят!</title>
</head>
<body>

<style type="text/css">
p {
				margin: 20px;
				font-family: Verdana;
				font-size: 12pt;
				text-align: center;
				font-weight: 400;
}


h2 {
				margin: 30px;
				font-family: Arial;
				font-size: 18pt;
				text-align: center;
				font-weight: 400;
}

a 

{
				font-size: 12pt;
				text-align: center;
				background-color: #2064A6;
				padding: 9px 20px 9px 20px;
				color: #FFFFFF;
				text-decoration: none;
				font-family: Arial;
				webkit-border-radius : 5px /*Скругление углов*/;
				moz-border-radius: 5px /*Скругление углов*/;
				border-radius: 5px /*Скругление углов*/;
}
a:hover

{
				background-color: #1D5996;text-decoration: none;

}

</style>

<?php
$tovar = @ trim ($_POST['tovar']);
$familiya = @ trim ($_POST['familiya']);
$email = @ trim ($_POST['email']);
$telefon = @ trim ($_POST['telefon']);
$adress = @ trim ($_POST['adress']);
$komment = @ trim ($_POST['komment']);
$dostavka = @ trim ($_POST['dostavka']);
$oplata = @ trim ($_POST['oplata']);

if (empty($familiya))
{
echo "<h2>Пожалуйста, укажите ваше имя!<h2>";
echo "<a href=05-zakaz-okno.htm>Вернуться</a>";
exit;
}

if (empty($email))
{
echo "<h2>$familiya, укажите ваш email!<h2>";
echo "<a href=05-zakaz-okno.htm>Вернуться</a>";
exit;
}


$address = "naborgotov@mail.ru";
$tema="Оформлен заказ на сайте готовых наборов: $familiya";

$zakaz = "

ИНФОРМАЦИЯ ПО ЗАКАЗУ:

$tovar 

$familiya 

$email

$telefon 

$adress

$komment

$dostavka 

$oplata

";



$send = mail ($address,$tema,$zakaz,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");


if ($send == 'true')
{echo "<h2>$familiya, спасибо за заказ!</h2><p> В ближайшее время с вами свяжется наш инженер. <br />Он ответит на ваши вопросы и уточнит стоимость заказа. </p><p><a href=05-zakaz-okno.htm>Выйти</a></p> ";}
else {echo "<h2>Ошибка, сообщение НЕ отправлено :(</h2>";}
 
?>
</body>
&nbsp;</html>