<meta charset="utf-8">
<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы
if (isset($_POST['institute']))		{$institute		= $_POST['institute'];		if ($institute == '')	{unset($institute);}}
if (isset($_POST['specialty']))		{$specialty		= $_POST['specialty'];		if ($specialty == '')	{unset($specialty);}}
if (isset($_POST['teacher']))		{$teacher		= $_POST['teacher'];		if ($teacher == '')	    {unset($teacher);}}
if (isset($_POST['comment']))		{$comment		= $_POST['comment'];		if ($comment == '')	    {unset($comment);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		    if ($sab == '')		    {unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($institute) ) {
$institute=stripslashes($institute);
$institute=htmlspecialchars($institute);
}
if (isset($specialty) ) {
$specialty=stripslashes($specialty);
$specialty=htmlspecialchars($specialty);
}
if (isset($teacher) ) {
$teacher=stripslashes($teacher);
$teacher=htmlspecialchars($teacher);
}
if (isset($teacher) ) {
$teacher=stripslashes($teacher);
$teacher=htmlspecialchars($teacher);
}
// адрес почты куда придет письмо
$address="hr.andriygtr@gmail.com";
// текст письма
$note_teacher="Інститут : $institute \r\n Спеціальність : $specialty \r\n Викладач : $teacher \r\n Коментар : $comment";

if (isset($institute)  &&  isset ($sab) ) {
mail($address,$urok,$note_teacher,"Content-type:teacher/plain; windows-1251");
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$institute</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $specialty</b>.</p>";
}

?>