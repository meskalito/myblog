<?php 
/*
 * выводит статьи на главную страницу категории html $num = 1;
 * 
 * 
 * 
 */  
    require_once ('article_sc_fns.php');
        db_connect();
        html_header();
        right_sidebar();
        list_articles_cat($num = 1);
        copyright();

