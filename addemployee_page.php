<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Добавление сотрудника</title>
        <link href="external.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            require 'header.html';
        ?>
        <form action="addemployee.php" method="POST">
            <table align="center">
                <tr>
                    <td>
                        <p>Введите ФИО сотрудника:</p>
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Введите номер телефона:</p>
                    </td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Введите дату рождения:</p>
                    </td>
                    <td>
                        <input type="text" name="birthdate">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Введите специальность:</p>
                    </td>
                    <td>
                        <input type="text" name="spec">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Добавить">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>