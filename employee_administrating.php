<?php
$patient = $_POST['employee'];
if (strlen($patient)==0)
{
    die("Ошибка при передаче данных");
}
switch ($patient) {
    case 'reg':
        include_once("removeemployee.html");
        break;
    case 'patientslist':
        include_once("employeelist.php");
        break;
    case 'todoc':
        include_once("addemployee.php");
        break;
    case 'covid':
        include_once("changeemployee.php");
        break;
    default:
        echo "Неизвестная ошибка</br>";
        break;
}
?>