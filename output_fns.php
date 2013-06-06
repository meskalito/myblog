<?php
/*
 * функции и html теги которые отображают информацию на всех страницах
 * html_header(); отображает шапку сайта
 * right_sidebar(); отображает правую колонку сайта, производит вывод количества статей в котегории
 * при помощи массива выведенного из right_menu()
 * list_articles(); выводит все статьи
 * article($idnum); выводит статью согласно её id в базе данных
 * list_articles_cat($num); выводит статью согласно категории, номер которой $num
 * copyright(); выводит в подвале знак копирайта и название сайта
 * 
 * 
 * 
 */  
?>

<?php function html_header() { ?>
    <head>
        <meta charset="utf-8">
        <title>Блог Mr.Meskalito </title>
        <script type="text/javascript" src="js/iquery-1.5.1.js"></script>
        <link rel="stylesheet" type="text/css" href="http://site2/blog.css"/>
        <link rel="stylesheet" type="text/css" href="http://site2/blog_form_article.css"/>
    </head>
    <body id="article_fon">
        <div id="article">
            <div id="banner"><img src="http://site2/images/logo.png" width="1024" height="200" alt="CSS: The Missing Manual"></div>
            <div id="log"> <h3><?php check_valid_user(); ?></h3></div>
            <div id="mainNav">
                <ul id="nav">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="html.php">HTML</a></li>
                    <li><a href="css.php">CSS</a></li>
                    <li><a href="php.php">PHP</a></li>
                    <li><a href="index.php">Готовые решения</a></li>
                    <li><a href="index.php">О себе</a></li>
                </ul>
            </div>
<?php } ?>
<?php function right_sidebar() { 
        $number = right_menu();
        list($a,$b,$c) = right_menu(); 
?>
            <div id="wrap">
                <div id="rightSidebar">
                    <ul class="nav_right">
                        <li><a href="html.php">HTML(<? echo $b;?>)</a></li>
                        <li><a href="css.php">CSS(<?echo $c;?>)</a></li>
                        <li><a href="php.php">PHP(<?echo $a;?>)</a></li>
                        <li><a href=index.php>Готовые решения(<?echo $a;?>)</a></li>
                    </ul>
                    <h2><?echo date("H:i l d F Y год. Количество прошедших дней в году z.");?></h2>
                </div>
<?php } ?>
<?php function list_articles() { ?>
                <div id="main">
                    <?php get_articles(); ?>
                </div>
            </div>
<?php } ?>


<?php function article($idnum) { ?>
                <div id="main">
                    <?php get_article($idnum); ?>
                </div>
            </div>
<?php } ?>

<?php function list_articles_cat($num) { ?>
                <div id="main">
                        <?php get_articles_cat($num); ?>
  
                </div>
            </div>
<?php } ?>
<?php
/*
 * user_reg_form(); функция выводящая форму для регистрации пользователя
 */
?>
<?php function user_reg_form() { ?>
                <div id="main">
                    <h1 id="lead"><span class="section">Регистрация пользователя</span> </h1>
                    <form id="subForm" name="subForm" method="post" action="article.php">
                    <p>
                        <label for="name" class="name">Имя пользователя</label>
                        <textarea name="name" cols="35" rows="1" id="name"></textarea>
                    </p>
                    <p>
                        <label for="passwd" class="label">Пароль (от 6 до 10 символов)</label>
                        <textarea name="passwd1" cols="35" rows="1" id="passwd"></textarea>
                    </p>
                    <p>
                        <label for="passwd" class="label">Повторите пароль</label>
                        <textarea name="passwd2" cols="35" rows="1" id="passwd"></textarea>
                    </p>
                    <p>
                        <label for="mail" class="label">E-mail: </label>
                        <textarea name="mail" cols="35" rows="1" id="mail"></textarea>
                    </p>
                    <p>
                        <input type="submit" name="Submit" id="subscribe" value="Subscribe" />
                    </p>
                    </form>
                </div>
            </div>
<?php } ?>
<?php function copyright() { ?>
            <div id="copyright">
                <h3>&#174 2013 Mr.Meskalito mr.meskalito@gmail.com</h3>
            </div>
        </div>
    </body>
<?php } ?>
