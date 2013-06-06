<?php
    require_once ('article_sc_fns.php');
    db_connect();
    $name = $_POST["name"];
    $passwd1 = $_POST["passwd1"];
    $passwd2 = $_POST["passwd2"];
    $mail = $_POST["mail"];
    session_start();
    try {
        if (!filled_out($_POST)) {
            throw new Exception('Вы не заполнили корректно форму. Пожалуйста, вернитесь на форму и повторите попытку.');
        }
        if (!valid_email($mail)) {
            throw new Exception('Недопустимый адрес электронной почты. Пожалуйста, вернитесь на форму и повторите попытку.');
        }
        if ((strlen($passwd1) < 6) || (strlen($passwd1) > 10)) {
            throw new Exception('Пароль должен содержать от 6 до 10 символов. Пожалуйста, вернитесь на форму и повторите попытку.');
        }
        if ($passwd1 !== $passwd2) {
            throw new Exception('Пароли не совпадают. Пожалуйста, вернитесь на форму и повторите попытку.');
        }
        register($name, $passwd1, $mail);
        $_SESSION['valid_user'] = $name;
        html_header();
        right_sidebar();
        send_article();
        copyright();
    }
