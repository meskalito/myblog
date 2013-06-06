<?php
/*
 *Функции которые производят действия  в правой колонке сайта
 * right_menu() - подсчитывает количество статей в разделе
 * 
 */

    function right_menu() {
        db_connect();
        $section = array('php','html','css','javascript','mysql','postgresql' );
        $qresult = mysql_query("SELECT * 
                                FROM blog ");
        if (!$qresult) die ("Ошибка подключения к базе данных");
        for ( $number_php = 0, $number_html = 0, $number_css=0; $list_article = mysql_fetch_assoc($qresult);) {
           if ( $list_article["section"]==='php') {
                $number_php++; }
            if ( $list_article["section"]==='html'){ 
                $number_html++; }
            if ( $list_article["section"]==='css') {
                $number_css++;} 
        }
    $number = array($number_php, $number_html, $number_css);
    return array($number_php, $number_html, $number_css);
}
