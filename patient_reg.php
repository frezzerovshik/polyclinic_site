<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Регистрация пациента</title>
    </head>
    <body>
        <?php 
            require 'header.html';
        ?>
        <form action="patient_reg_bl.php" method="POST">
            <table align="center">
                <tr>
                    <td>
                        <p>Введите ФИО пациента: </p>
                    </td>
                    <td>
                        <p><input type="text" name="fio"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Введите номер телефона пациента: </p>
                    </td>
                    <td>
                        <p><input type="tel" name="phonenumber"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Введите дату рождения пациента: </p>
                    </td>
                    <td>
                        <p><input type="datetime" name="birthdate"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><input type="submit" name="reg">Зарегистрировать пациента</p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>