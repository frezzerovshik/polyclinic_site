<!DOCTYPE html> <html>
<head>
<title>Записать пациента на приём</title>
<meta charset="utf-8"> </head>
<link href="external.css" rel="stylesheet">
<body>
        <?php 
            require 'header.html';
        ?>
    <form action="patient_todoc_first.php" method="POST">
        <table align="center">
            <tr>
                <td><p>Укажите уникальный ID пациента(указан в медицинской карте):<p></td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>
                    <p>Выберите специализацию врача, к которому требуется записаться</p>
                </td>
                <td>
                    <select name="spec">
                        <option>Терапевт</option>
                        <option>Кардиолог</option>
                        <option>Хирург</option>
                    </select>
                </td>
            </tr>
            <tr><td><input type="submit" value="Продолжить"></td></tr>
        </table>
    </form>
    <?php
    include_once("connect_db.php");
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
    $sql = "SELECT * FROM `Работники` WHERE `ID сотрудника` = (SELECT `ID медработника` FROM `Привязки` WHERE `ID пациента`='1')";
    $result = $conn->query($sql);
    
?> 
</body>
</html>