<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
        <link href="external.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            require 'header.html';
        ?>
        <table align="center">
            <tr>
                <td width="33%">
                    <h3 align="center">Работа с пациентами</h3>
                    <form action="patient_administrating.php" method="POST">
                        <table align="center">
                            <tr>
                                <td>
                                    <button type="submit" name="patient" value="reg">Зарегистрировать пациента</button>
                                </td>
                                <td>
                                    <button type="submit" name="patient" value="patientslist">Просмотреть информацию о пациентах, проходящих амбулаторное лечение</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="patient" value="todoc">Записать пациента на приём</button>
                                </td>
                                <td>
                                    <button type="submit" name="patient" value="covid">Просмотреть информацию о пациентах, находящихся в зоне риска COVID-19</button>
                                </td>
                            </tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>

                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                        </table>
                    </form>
                </td>
                <td width="33%">
                    <h3 align="center">Работа с сотрудниками</h3>
                    <form action="employee_administrating.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <button type="submit" name="employee" value="removeemployee">Уволить сотрудника</button>
                                </td>
                                <td>
                                    <button type="submit" name="employee" value="employeelist">Просмотреть список сотрудников в учреждении</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="employee" value="addemployee">Добавить сотрудника</button>
                                </td>
                            </tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>

                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                            <tr><td>
                                <p>
                                    
                                </p>
                            </td></tr>
                        </table>
                    </form>
                </td>
                <td width="33%">
                    <h3 align="center">Личная информация</h3>
                    <table>
                        <tr>
                            <td>
                                <?php include_once("load_image.php"); ?>
                            </td>
                            <td>
                                <table align="left">
                                    <tr>
                                        <td>
                                            <p><?php include_once("load_fio.php"); ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                Администратор
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>