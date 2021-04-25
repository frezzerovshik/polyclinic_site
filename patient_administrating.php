<?php
$patient = $_POST['patient'];
if (strlen($patient)==0)
{
    die("Ошибка при передаче данных");
}
switch ($patient) {
    case 'reg':
        include_once("patient_reg.php");
        break;
    case 'patientslist':
        include_once("patient_list.php");
        break;
    case 'todoc':
        include_once("patient_todoc.php");
        break;
    case 'covid':
        include_once("patient_covid.php");
        break;
    default:
        echo "Неизвестная ошибка</br>";
        break;
}
?>