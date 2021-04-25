<?php 
            $fio = $_POST["fio"];
            $phonenumber = $_POST["phonenumber"];
            $birthdate = $_POST["birthdate"];
            require_once 'connect_db.php';
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($conn)); 
            if (strlen($fio)==0)
            {
                die("Поле \"ФИО\" не может быть пустым");
            }
            $sql = "INSERT IGNORE INTO Пациенты(`ФИО пациента`,`Номер телефона`,`Дата рождения`) VALUES('" .$fio."','" .$phonenumber."','".$birthdate."');";
            if($conn->query($sql))
            {
                echo "Регистрация пациента прошла успешно</br>";
                sleep(3);
                include_once("admin.html");
            }
            else
            {
                echo "Возникла ошибка при регистрации</br>";
                sleep(3);
                include_once("patient_reg.php");
            }
        ?>