<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta http-equiv="Content-Language" content="ru" />
<title>���� ������ �������</title>
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
				webkit-border-radius : 5px /*���������� �����*/;
				moz-border-radius: 5px /*���������� �����*/;
				border-radius: 5px /*���������� �����*/;
}
a:hover

{
				background-color: #1D5996;text-decoration: none;

}


</style>



<?php
$email = @ trim ($_POST['email']);
$familiya = @ trim ($_POST['familiya']);
$telefon = @ trim ($_POST['telefon']);
$gorod = @ trim ($_POST['gorod']);
$text = @ trim ($_POST['text']);

$pole1 = @ trim ($_POST['pole1']);
$pole2 = @ trim ($_POST['pole2']);
$pole3 = @ trim ($_POST['pole3']);
$pole4 = @ trim ($_POST['pole4']);
$pole5 = @ trim ($_POST['pole5']);
$pole6 = @ trim ($_POST['pole6']);


if (empty($familiya))
{
echo "<h2>����������, ������� ���� ���!<h2>";
echo "<a href=kontakt.htm>���������</a>";
exit;
}

if (empty($email))
{
echo "<h2>$familiya, ������� ��� email!<h2>";
echo "<a href=kontakt.htm>���������</a>";
exit;
}


$address = "vashapochta@mail.ru";
$tema="������ � ����� ������� ������� - $familiya $pole1 ;

$pismo = "

$email

$familiya

$telefon

$gorod

$text

$pole1

$pole2

$pole3

$pole4

$pole5

$pole6
";

$send = mail ($address,$tema,$pismo,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");


if ($send == 'true')
{echo "<h2>������� �� ���������, $familiya! <br />���� ��������� ����������.</h2><p>�� ��� ������� � ������� ������������ ��� </p><p><a href=kontakt.htm>�����</a></p> ";}
else {echo "<h2>������, ��������� �� ���������� :(</h2>";}
 
?>
</body>
&nbsp;</html>