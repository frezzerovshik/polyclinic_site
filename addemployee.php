<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$spec = $_POST['spec'];
include_once("connect_db.php");
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
$sql = "INSERT IGNORE INTO `Работники`(`ФИО сотрудника`, `Дата рождения`, `Номер телефона`,`Специализация`) VALUES('".$name."','".$birthdate."','".$phone."','".$spec."');";
if ($conn->query($sql))
{
    echo "Добавление прошло успешно</br>";
    sleep(10);
    include("admin_page.php");
}
else
{
    echo "Произошла ошибка";
    sleep(10);
    include("admin_page.php");
}

?>