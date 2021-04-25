<?php
    $id = $_SESSION['id'];
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