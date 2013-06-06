<?php
/*
 * выводит статьи на главную страницу категории css $num = 2;
 * 
 * 
 * 
 */  
    require_once ('article_sc_fns.php');
        db_connect();
        html_header();
        right_sidebar();
        list_articles_cat($num = 2);
        copyright();
