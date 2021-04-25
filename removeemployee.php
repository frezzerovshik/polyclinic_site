<!DOCTYPE html> 
<html>
<head>
    <title>Увольнение пациента</title>
    <meta charset="utf-8"> 
    <link href="external.css" rel="stylesheet">
</head>
<body> 
    <?php
        $name = $_POST["name"];
        $phone = $_POST["phonenumber"]; 
        include_once("connect_db.php");
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->query($sql);
        $sql = "DELETE IGNORE FROM `Работники` WHERE `ФИО сотрудника` = '" .$name. "' AND `Номер телефона` = '" .$phone."';";
        if ($conn->query($sql)) 
        {
            echo $name . " удален из базы данных работников поликлиники";
        } 
        else 
        {
            echo "Произошла ошибка запроса";
        }
        $conn->close(); 
?>
</body>
</html>