<?php
/*
 * Фукция регистрации пользователя и запись данных в базу данных 
 * 
 */
    function register($name, $passwd1, $mail) {
        $conn = db_connect();
        $result = $conn->query("SELECT * 
                                FROM user 
                                WHERE username='".$name."'");
        if (!$result) {
            throw new Exception ('Невозможно выполнить запрос к БД');
        }
        if ($result->num_rows > 0) {
            throw new Exception ('Это имя пользователя уже занято - вернитесь на форму регистрации и выберите другое имя.');
        }
        $result = $conn->query("INSERT INTO user
                                VALUES ('".$name."', sha1('".$passwd1."'), '".$mail."')");
        if (!$result) {
            throw new Exception ('Невозможно сохранение в БД - пожалуйста, попытайтесь позже.');
        }
        return true;
    }









/*
 * Фукция выводит приветствие и логин пользователя, а так же ссылку на регистрацию и на вход в систему. 
 * 
 */
    function check_valid_user() {
        if (isset ($_SESSION['valid_user'])) {
            echo "Приветствуем Вас, ".$_SESSION['VALID_USER'].".</br>";
        } else {
            echo "Вы не вошли в систему. <a href= index.php>Войти в систему. </a></br> <a href= register_form.php>Регистрация.</a></br>";
        }
    }
