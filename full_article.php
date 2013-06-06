<?php
/*
 * выводит одну статью на главную страницу по id номеру
 * 
 * 
 * 
 */    
    require_once ('article_sc_fns.php');
        html_header();
        right_sidebar();
        $idnum = $_GET['id'];
        article($idnum);
        copyright();
