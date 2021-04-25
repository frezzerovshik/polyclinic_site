<?php
$patient = $_POST['employee'];
if (strlen($patient)==0)
{
    die("Ошибка при передаче данных");
}
switch ($patient) {
    case 'removeemployee':
        include_once("removeemployee.html");
        break;
    case 'employeelist':
        include_once("employeelist.php");
        break;
    case 'addemployee':
        include_once("addemployee.html");
        break;
    case 'changeemployee':
        include_once("changeemployee.php");
        break;
    default:
        echo "Неизвестная ошибка</br>";
        break;
}
?>