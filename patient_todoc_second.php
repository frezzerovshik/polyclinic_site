<?php
    include_once("connect_db.php");
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
    $patient_id = $_POST['id'];
    $sql = "SELECT `ID сотрудника` FROM `Работники` WHERE `ФИО сотрудника` ='". $_POST["name"] . "' LIMIT 1";
    $result = $conn->query($sql);
    $doctor_id = "";
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        { 
            $doctor_id = $row['ID сотрудника'];
        } 
    }
    else 
    {
        echo "error";
    }
    $sql = "INSERT IGNORE INTO `Привязки`(`ID медработника`,`ID пациента`) VALUES('" . $patient_id . "','" . $doctor_id . "')";
    if ($conn->query($sql))
    {
        echo "Запись прошла успешно, сообщите номер записи пациенту: " . $patient_id . $doctor_id . ".</br>"; 
    }
    else
    {
        echo "Ошибка при записи </br>"; 
    }
?> 