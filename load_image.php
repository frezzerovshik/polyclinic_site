<?php
    $id = $_SESSION['id'];
    require_once "connect_db.php";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
    $id = $id + 1;
    $sql = "SELECT `image_url` FROM `Пользователь` WHERE `ID пользователя`='" . $id . "';";
    $result = $conn->query($sql);
    foreach ($result as $key => $value) 
    {
        foreach ($value as $key_1 => $value_1) 
        {
            echo "<img class='host' src='" . $value_1 . "'>";
        }
    }
?>