<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Proccessing</title>
</head>
<body>
    <?php
        require_once 'connect_db.php';
        $handle = fopen("Logs.txt" , "w+");
        $login = "";
        $pwd = "";
        if ($handle == false)
        {
            echo "Не удалось создать или открыть файл журналирования </br>";
        }
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn)); 
        if ($_POST["auth_type"] === "Регистрация") 
        {
            fwrite($handle,"Polyclinics.Log: Auth type: Регистрация\n");
            include("registration.html");
            return;
        } 
        else 
        {
            if ($_POST["auth_type"] === "admin") 
            {
                fwrite($handle,"Polyclinic.Log: Auth type: Администратор\n");
                $sql = "SELECT * FROM `Пользователь`";
                fwrite($handle,"Polyclinic.Log Module: Authorization SQL Query: " . $sql ."\n");
                $result = $conn->query($sql);
                foreach($result as $key=>$value)
                {
                    $login_checked = false;
                    $password_checked = false;
                    foreach ($value as $column => $value)
                    {
                        if ($column === "Логин")
                        {
                            fwrite($handle, "Polyclinic.Log Column Name: " . $column . " Value: " . $value ."\n");
                            $login_checked = $value === $_POST["login"];
                            $login = $value;
                            fwrite($handle, "Polyclinic.Log is login checked: " . $login_checked . "\n");
                        } 
                        else
                        {
                            if ($column === "Пароль")
                            {
                                fwrite($handle, "Polyclinic.Log Column Name: " . $column . " Value: " . $value ."\n");
                                $password_checked = $value === $_POST["password"];
                                $password = $login;
                                fwrite($handle, "Polyclinic.Log is password checked: " . $password_checked ."\n");
                            } 
                        }
                        if ($login_checked == true && $password_checked == true)
                        {
                            fwrite($handle, "Polyclinic.Log admin includes\n");
                            session_start();
                            $_SESSION['id'] = $key;
                            $_SESSION['login'] = $login;
                            $_SESSION['password'] = $pwd;
                            include("admin.php");
                            return;
                        }
                    }
                }
            }
            else
            {
                fwrite($handle,"Polyclinic.Log: Auth type: Сотрудник\n");
                $sql = "SELECT `Логин` , `Пароль` FROM `Работники`";
                fwrite($handle,"Polyclinic.Log Module: Authorization SQL Query: " . $sql . "\n");
                $result = $conn->query($sql);
                foreach($result as $key=>$value)
                {
                    $login_checked = false;
                    $password_checked = false;
                    foreach ($value as $column => $value)
                    {
                        if ($column === "Логин")
                        {
                            fwrite($handle, "Polyclinic.Log Column Name: " . $column . " Value: " . $value . "\n");
                            $login_checked = $value === $_POST["login"];
                            fwrite($handle, "Polyclinic.Log is login checked: " . $login_checked . "\n");
                        } 
                        else
                        {
                            if ($column === "Пароль")
                            {
                                fwrite($handle, "Polyclinic.Log Column Name: " . $column . " Value: " . $value . "\n");
                                $password_checked = $value === $_POST["password"];
                                fwrite($handle, "Polyclinic.Log is password checked: " . $password_checked . "\n");
                            } 
                        }
                        if (($login_checked == true) and ($password_checked == true))
                        {
                            fwrite($handle, "Polyclinic.Log employee includes\n");
                            include("employee.php");
                            return;
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>