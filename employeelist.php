<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    require 'header.html';
    $sql = "SELECT ФИО сотрудника, Образование, Номер телефона,Специализация,Дата вступления в должность,Категория,Сертификаты FROM Работники WHERE 1";
    $result = $conn->query($sql); echo '<table>';
    echo '<tr>';
    echo '<th>ФИО сотрудника</th>';
    echo '<th>Образование</th>';
    echo '<th>Номер телефона</th>';
    echo '<th>Специализация</th>';
    echo '<th>Дата вступления в должность</th>'; echo '<th>Категория</th>';
    echo '<th>Сертификаты</th>'; echo '</tr>';
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo '<tr>'; 
    echo '<td>' .$row["ФИО сотрудника"] . '</td>'; 
    echo '<td>' .$row["Образование"] . '</td>';
    echo '<td>' .$row["Номер телефона"] . '</td>';
    echo '<td>' .$row["Специализация"] . '</td>';
    echo '<td>' .$row["Дата вступления в должность"] . '</td>';
    echo '<td>' .$row["Категория"] . '</td>';
    echo '<td>' .$row["Сертификаты"] . '</td>';
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
