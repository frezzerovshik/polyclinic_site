<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link href="external.css" rel="stylesheet">
</head>
<body>
        <?php 
            require 'header.html';
        ?>
    <h1>Регистрация</h1>
    <table align="center">
        <tr>
            <td>
                <form action="registration.php" method="POST">
                    <table>
                        <tr>
                            <th class="form">
                                <p>Введите Ваше ФИО: </p>
                            </th>
                            <td>
                                <input type="text" name="fio">
                            </td>
                        </tr>
                        <tr>
                            <th class="form">
                                <p>Введите логин: </p>
                            </th>
                            <td>
                                <input type="text" name="login">
                            </td>
                        </tr>
                        <tr>
                            <th class="form">
                                <p>Введите пароль</p>
                            </th>
                            <td>
                                <input type="password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <th class="form">
                                <p>Укажите e-mail</p>
                            </th>
                            <td>
                                <input type="text" name="email">
                            </td>
                        </tr>
                        <tr>
                            <th class="form">
                                <p>Выберите фото:</p>
                            </th>
                            <td>
                                <input type="file" name="userpick">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="registration" value="Регистрация">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td>
                <table>
                    <tr>
                        <p>Поле ФИО является обязательным</p>
                    </tr>
                    <tr>
                        <p>Поля Логин и Пароль являются обязательными</p>
                    </tr>
                    <tr>
                        <p>Укажите Ваш e-mail, если хотите</p>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
