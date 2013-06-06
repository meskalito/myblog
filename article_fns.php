<?php
/*
 * функции по работе с статьями из базы данных 
 * 
 * get_article($idnum); выводит статью из базы данных согласно номера id - $idnum
 * get_articles(); выводит все статьи из базы данных
 * get_articles_cat($num); выводит статьи из базы данных определенной категории, категория выбирается при помощи номера элемента массива $num
 * 
 * 
 * 
 */
    function get_article($idnum) {
        db_connect();
        $section = array('php','html','css','javascript','mysql','postgresql' );
        $qresult = mysql_query("SELECT * 
                                FROM blog 
                                WHERE id = '$idnum'");
            if (!$qresult) die ("Ошибка подключения к базе данных");
        while ($list_article = mysql_fetch_assoc($qresult)) {
            print "<h2>{$list_article["title"]}</h2></br>";
            print "<p>{$list_article["article"]}</p>";
      
        }
    }


    function get_articles() {
        db_connect();
        $section = array('php','html','css','javascript','mysql','postgresql' );
        $qresult = mysql_query("SELECT * 
                                FROM blog");
            if (!$qresult) die ("Ошибка подключения к базе данных");
        while ($list_article = mysql_fetch_assoc($qresult)) {
            print "<h2>{$list_article["title"]}</h2></br>";
            print "<p>{$list_article["preview"]}</p></br>";
            $idnum = $list_article["id"];
            $url = "full_article.php?id=".$idnum;
            print "<a href= $url>читать далее</a></br>";
        }
        $idnum = $list_article["id"];
        return $idnum;
    }

    function get_articles_cat($num) {
        db_connect();
        $section = array('php','html','css','javascript','mysql','postgresql' );
        $qresult = mysql_query("SELECT * 
                                FROM blog 
                                WHERE section = '$section[$num]'");
            if (!$qresult) die ("Ошибка подключения к базе данных");
        while ($list_article = mysql_fetch_assoc($qresult)) {
            $idnum = $list_article["id"];
            $url = "full_article.php?id=".$idnum;
            print "<h2>{$list_article["title"]}</h2></br>";
            print "<p>{$list_article["preview"]}</p>";
            print "<a href= $url>читать далее</a></br>";
        }
    }
