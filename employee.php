<!DOCTYPE html> <html>
<head>
<title>Добро пожаловать </title>
<meta charset="utf-8"> </head>
Листинг 4 – главное меню сотрудника
<body>
        <?php 
            require 'header.html';
        ?>
<h1 align="center">Добро пожаловать в информационную систему поликлиники</h1> <form form enctype="multipart/form-data" action="polyclinics.php" method="POST">
<p align="center">
<button type="submit" name="button" value="eldery">Просмотреть информацию о пациентах, находящихся в зоне риска COVID-19</button>
</p>
<p align="center">
<button type="submit" name="button" value="addpatient">Добавить пациента</button> </p>
<p align="center">
<button type="submit" name="button" value="update">Изменить диагноз</button>
</p>
<p align="center">
<button type="submit" name="button" value="analyzes">Анализы по алфавиту</button> </p>
</form> <?php
$servername = "localhost"; $username = "root"; $password = "root"; $dbname = "polyclinic";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
if ($_POST["button"] == "eldery") {
$sql = "SELECT ФИО пациента,Номер телефона,Дата рождения,Дата последнего
обращения,Назначения,Диагноз FROM Пациенты WHERE datediff(CURRENT_DATE, `Дата рождения`)>=45";
$result = $conn->query($sql); echo '<table>';
echo '<tr>';
echo '<th>ФИО пациента</th>';
echo '<th>Номер телефона</th>';
echo '<th>Дата рождения</th>';
echo '<th>Дата последнего обращения</th>'; echo '<th>Назначения</th>';
echo '<th>Диагноз</th>'; echo '</tr>';
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){ echo '<tr>';
echo '<td>' . $row["ФИО пациента"] . '</td>';
echo '<td>' . $row["Номер телефона"] . '</td>';
echo '<td>' . $row["Дата рождения"] . '</td>';
echo '<td>' . $row["Дата последнего обращения"] . '</td>';
echo '<td>' . $row["Назначения"] . '</td>';
echo '<td>' . $row["Диагноз"] . '</td>';
echo '</tr>';
} }
else {
echo "error";
}
echo '</table>'; }
$row["ФИО пациента"] . '</td>'; $row["Номер телефона"] . '</td>'; $row["Дата рождения"] . '</td>';
$row["Дата последнего обращения"] . '</td>'; $row["Назначения"] . '</td>'; $row["Диагноз"] . '</td>';
if ($_POST["button"] == "addpatient") {
echo '<form action="addpatient.php" method="POST">';
echo '<p>Имя<input type="text" name="name"/></p>';
echo '<p>Номер телефона<input type="text" name="phonenumber"/></p>'; echo '<p><input type="submit" value="Отправить"/></p>';
echo '</form>';
}
if ($_POST["button"] == "update") {
    $sql = "SELECT ID пациента, ФИО пациента,Назначения,Диагноз FROM `Пациенты`"; $result = $conn->query($sql);
    echo '<table>';
    echo '<tr>';
    echo '<th>ID пациента</th>'; echo '<th>ФИО пациента</th>'; echo '<th>Назначения</th>'; echo '<th>Диагноз</th>';
    echo '</tr>';
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
    echo '<tr>';
    echo '<td>' . $row["ID пациента"] . '</td>'; echo '<td>' . $row["ФИО пациента"] . '</td>'; echo '<td>' . $row["Назначения"] . '</td>'; echo '<td>' . $row["Диагноз"] . '</td>';
    echo '</tr>';
    } }
    else {
    echo "error";
    }
    echo '</table>';
    echo '<form action="update.php" method="POST">';
    echo '<p>Введите ID пациента <input type="text" name="id"/></p>'; echo '<p>Введите новый диагноз <input type="text" name="diag"/></p>';
    echo '<p><input type="submit" value="Обновить"/></p>'; echo '</form>';
    }
    if ($_POST["button"] == "analyzes") {
    $sql = "SELECT * FROM Анализы ORDER BY Название анализа;"; echo "<table>";
    echo "<tr>";
    echo "<th>Название анализа</th>";
    echo "<th>Дата назначения</th>"; echo "<th>Дата и время приёма</th>"; echo "<th>Кабинет</th>";
    echo "</tr>";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
    echo '<tr>';
    echo '<td>' . $row["Название анализа"] . '</td>'; echo '<td>' . $row["Дата назначения"] . '</td>'; echo '<td>' . $row["Дата и время приёма"] . '</td>'; echo '<td>' . $row["Кабинет"] . '</td>';
    echo '</tr>';
    } }
    else {
    echo "error";
    }
    echo "</table>"; }
$conn->close(); ?>
</body>
