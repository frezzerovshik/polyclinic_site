<!DOCTYPE html> <html>
<head>
<title>Просмотреть информацию о пациентах, проходящих амбулаторное лечение</title>
<meta charset="utf-8"> </head>
<link href="external.css" rel="stylesheet">
<body>
    <table align="center">
        <tr>
        <td>
            <?php
            require 'header.html';
            include_once("connect_db.php");
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
            if (strlen($_POST["filter_sex"]) == 0)
            {
                $sql = "SELECT * FROM `Пациенты`";
            }
            else 
            {
                $sql = "SELECT * FROM `Пациенты` WHERE `Пол`= '" . $_POST["filter_sex"] . "';";
            }
            $result = $conn->query($sql);
            echo '<table align="center">';
            echo '<tr>';
            echo '<th>ФИО пациента</th>';
            echo '<th>Дата рождения</th>';
            echo '<th>Номер телефона</th>';
            echo '<th>Дата последнего обращения</th>';
            echo '<th>Назначения</th>'; 
            echo '<th>Диагноз</th>';
            echo '<th>Пол</th>'; 
            echo '<th>          </th>'; 
            echo '</tr>';
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                { 
                    echo '<tr>';
                    echo '<td align="center">' . $row["ФИО пациента"] . '</td>';
                    echo '<td align="center">' . $row["Дата рождения"] . '</td>';
                    echo '<td align="center">' . $row["Номер телефона"] . '</td>';
                    echo '<td align="center">' . $row["Дата последнего обращения"] . '</td>';
                    echo '<td align="center">' . $row["ДНазначения"] . '</td>';
                    echo '<td align="center">' . $row["Диагноз"] . '</td>';
                    echo '<td align="center">' . $row["Пол"] . '</td>';
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
    </td>
    <td>
        <form action="patient_list.php" method="POST">
            <table align="center">
                <tr>
                    <td>
                        <p>Укажите пол пациента: </p>
                    </td>
                    <td>
                        <select name="filter_sex">
                            <option>Мужской</option>
                            <option>Женский</option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="filter" value="Фильтровать">
                    </td>
                </tr>
            </table>
        </form>
    </td>
    </tr>
</table>
</body>
</html>