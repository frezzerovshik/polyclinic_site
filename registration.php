<?php
$fio = $_POST["fio"];
$login = $_POST["login"];
$pwd = $_POST["password"];
$email = $_POST["email"];
$image_url = $_POST["userpick"];
if (strlen($fio) == 0 or strlen($login) == 0 or strlen($pwd)==0)
{
    echo "Не заполнены обязательные поля";
    sleep(3);
    include("main_page.html");
    return;
}
$handle = fopen("Logs.txt" , "w+");
if ($handle == false)
{
    echo "Не удалось создать или открыть файл журналирования </br>";
}
require_once "connect_db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
$sql = "INSERT IGNORE INTO `Работники`(`Логин`, `Пароль`, `email`, `image_url`) VALUES('".$login."','".$pwd . "','" . $email . "','" . $image_url . "');";
fwrite($handle,"Polyclinic.Log Module: Registration SQL Query: " . $sql ."\n");
if(!$conn->query($sql))
{
    echo "Не удалось завершить регистрацию";
    sleep(3);
    include("main_page.html");
}
else
{
    echo "Регистрация успешно завершена";
    sleep(3);
    include("main_page.html");
}
?>