<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Добро пожаловать в административную панель Поликлиники</title>
        <link href="external.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            require 'header.html';
        ?>
        <table>
            <tr>
                <td>
                    <div class="image">
                        <img src="b75eb49e.jpg">
                        <p class="image">Поликлиника №23 Калининского района</p>
                    </div>
                </td>
                <td>
                    <div class="text">
                        <p class="text">Поликлиника №23 Калининского района открыта 26 мая 1963 года.</br> 
                            Специализировалась изначально на травматологии, но на сегодняшний день является многоплановым медицинским центром, </br>
                            где пациенты могут получать высококачественную амбулаторную медицинскую помощь.
                        </p>
                        <img class="host" src="ponkratov.jpg">
                        <p class="host">Главный врач поликлиники - Панкратов А.В.</p>
                        <form class="gallery" action="gallery.php" method="POST">
                            <button name="gallery" value="Просмотреть галерею сотрудников">Просмотреть галерею сотрудников</button>
                        </form>
                    </div>
                </td>
                <td>
                    <form class="auth" action="authorization.php" method="POST">
                        <p>Логин<input type="text" name="login"></p>
                        <p>Пароль<input type="text" name="password"></p>
                        <p><input type="submit" name="auth" value="Авторизоваться"></p>
                        <p><input type="radio" name="auth_type" value="admin">Авторизоваться как администратор</p>
                        <p><input type="radio" name="auth_type" value="employee">Авторизоваться как сотрудник</p>
                        <p><input type="radio" name="auth_type" value="Регистрация">Регистрация</p>
                    </form>
                </td>
            </tr>
        </table>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>