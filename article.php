<?php
require_once ('article_sc_fns.php');
db_connect();
$title = $_POST["title"];
$num = $_POST["section"];
$preview = $_POST["preview"];
$article = $_POST["newarticle"];
$section = array('php','html','css','javascript','mysql','postgresql' );
//mysql_qw(
//'NSERT INTO blog (section, title, preview, article) VALUES( $section[$num], $title, $preview, $article)')
//or die (mysql_error());
$strSQL = "INSERT INTO blog (section, title, preview, article) VALUES('$section[$num]', '$title', '$preview', '$article')";
mysql_query($strSQL) or die(mysql_error());
html_header();
right_sidebar();
send_article();
copyright();



mysql_close();
