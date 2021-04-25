<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Увольнение сотрудника</title>
        <link href="external.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            require 'header.html';
        ?>
    <form action="removeemployee.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    <p>Введите ФИО увольняемого сотрудника: </p> 
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Номер телефона увольянемого сотрудника: </p> 
                </td>
                <td>
                    <input type="text" name="phonenumber">
                </td>
            </tr>
            <tr>
                <td>
                    <p><input type="submit" value="Отправить"/></p>
                </td>
            </tr>
        </table>
    </form>
</body>