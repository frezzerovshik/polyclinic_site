<!DOCTYPE html> <html>
<head>
<title>Найти лечащего врача</title>
<meta charset="utf-8"> </head>
<body> 
    <?php
    include_once("connect_db.php");
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
    $sql = "SELECT * FROM `Работники` WHERE `ID сотрудника` = (SELECT `ID медработника` FROM `Привязки` WHERE `ID пациента`='1')";
    $result = $conn->query($sql);
    echo '<table>';
    echo '<tr>';
    echo '<th>ФИО сотрудника</th>';
    echo '<th>Образование</th>';
    echo '<th>Номер телефона</th>';
    echo '<th>Специализация</th>';
    echo '<th>Дата вступления в должность</th>'; 
    echo '<th>Категория</th>';
    echo '<th>Сертификаты</th>'; 
    echo '</tr>';
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        { 
            echo '<tr>';
            echo '<td>' . $row["ФИО сотрудника"] . '</td>';
            echo '<td>' . $row["Образование"] . '</td>';
            echo '<td>' . $row["Номер телефона"] . '</td>';
            echo '<td>' . $row["Специализация"] . '</td>';
            echo '<td>' . $row["Дата вступления в должность"] . '</td>';
            echo '<td>' . $row["Категория"] . '</td>';
            echo '<td>' . $row["Сертификаты"] . '</td>';
            echo '</tr>';
        } 
    }
    else 
    {
        echo "error";
    }
    echo '</table>'; 
    $conn->close();
?> 
</body>
</html>