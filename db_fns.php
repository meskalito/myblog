<?php
/*
 * функции по работе с базой данный MySQL
 * db_connect(); подключается к базе данных и подключается к нужной базе
 * 
 */
    function db_connect() {
        $user = "root";
        $pass = "tipflop";
        mysql_query("SET NAMES utf8");
        mysql_connect("localhost", $user, $pass)
            or die ("Error connecting to database: ".mysql_error());
        $db = "blog";
        mysql_select_db($db)
            or die ("Could not select database: ".mysql_error());
        mysql_query("SET NAMES utf8");
    }

