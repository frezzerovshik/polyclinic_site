
<!DOCTYPE html> <html>
<head>
<title>Записать пациента на приём</title>
<meta charset="utf-8"> </head>
<link href="external.css" rel="stylesheet">
<body>
    <form action="patient_todoc_second.php" method="POST">
        <? 
            session_start();
            $_SESSION['spec'] = $_POST['spec'];
        ?>
        <table align="center">
            <tr>
                <td><p>Укажите уникальный ID пациента(указан в медицинской карте):<p></td>
                <td><input type="text" name="id" value=<?php echo $_POST['id']?>></td>
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
            <tr> 
                <td>
                    <p>Выберите специалиста:</p>
                </td>
                <td>
                    <?php 
                    include_once("connect_db.php");
                    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn));
                    $sql = "SELECT `ФИО сотрудника` FROM `Работники` WHERE `Специализация`='" . $_POST['spec'] . "';";
                    $result = $conn->query($sql);
                    echo "<select name='name'>";
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc())
                            { 
                            echo '<option>' . $row["ФИО сотрудника"] . '</option>';
                            } 
                        }
                        else 
                        {
                            echo "error";
                        }
                        echo "</select>";
                    ?>
                </td>
             </tr>
            <tr><td><input type="submit" value="Записать"></td></tr>
        </table>
    </form>
</body>
</html>