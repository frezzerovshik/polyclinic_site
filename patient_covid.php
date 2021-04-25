<!DOCTYPE html>
<html>
    <head>
    <title>Просмотреть информацию о пациентах в зоне риска COVID-19</title>
    <meta charset="utf-8"> </head>
    <link href="external.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require 'header.html';
            include_once("connect_db.php");
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
            $sql = "SELECT `ФИО пациента`,`Номер телефона`,`Дата рождения`,`Дата последнего обращения`,`Назначения`,`Диагноз` FROM `Пациенты` WHERE datediff(CURRENT_DATE, `Дата рождения`)>=45";
            $result = $conn->query($sql); 
            echo '<table align="center">';
            echo '<tr>';
            echo '<th>ФИО пациента</th>';
            echo '<th>Номер телефона</th>';
            echo '<th>Дата рождения</th>';
            echo '<th>Дата последнего обращения</th>'; echo '<th>Назначения</th>';
            echo '<th>Диагноз</th>';
            echo '</tr>';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>' . $row["ФИО пациента"] . '</td>';
                    echo '<td>' . $row["Номер телефона"] . '</td>';
                    echo '<td>' . $row["Дата рождения"] . '</td>';
                    echo '<td>' . $row["Дата последнего обращения"] . '</td>';
                    echo '<td>' . $row["Назначения"] . '</td>';
                    echo '<td>' . $row["Диагноз"] . '</td>';
                    echo '</tr>'; 
                }
            }
            else {
                echo "error"; 
            }
            echo '</table>';
        ?>
    </body>
</html>