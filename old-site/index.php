<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
    <title>Творческая мастерская по изготовлению светильников - Romatti. Освещение под ключ</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="творческие светильники, светильники romatti, освещение под ключ" />
    <meta name="description" content="Творческая мастерская по изготовлению светильников. Освещение под ключ" />
    <base href="http://bukashkin.ru/" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://bukashkin.ru/css/style.css" />
    <link rel="stylesheet" type="text/css" href="http://bukashkin.ru/css/jquery.jcarousel.css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/PF_Din_Text_Comp_Pro_400.font.js"></script>

    <!--[if IE]><![if !IE 6]><![endif]-->
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <!--[if IE]><![endif]><![endif]-->


    <script type="text/javascript">
     Cufon.replace("#breadcrumbs");
     Cufon.replace("tr.tr_head");
     Cufon.replace("td.td_head");

     function mycarousel_initCallback(carousel) {

     jQuery('#next').bind('click', function() {
        carousel.next();
        return false;
        });

     jQuery('#prev').bind('click', function() {
        carousel.prev();
        return false;
        });

     };

     jQuery(document).ready(function() {     $('li.grayscale').click(function() {
                $('div.border').css("display", "none");
                this.firstChild.lastChild.style.display = "block";
              });

       jQuery('#portfolio_cat_list').jcarousel({
       	scroll: 1,
       	initCallback: mycarousel_initCallback,
       	buttonNextHTML: null,
        buttonPrevHTML: null
       	});
     });

    </script>
    <script type="text/javascript" src="js/grayscale2.js"></script>
  </head>
  <body>
    <div id="main">
      <!--Шапка-->
<?php include("header.php");?>
      <!--//Шапка-->


            <!--Главная-->
      <div id="main_page">
        <img src="images/menu.png" width="524" height="517" alt="" class="menu" />
        <img src="images/slogan.png" width="451" height="80" alt="" class="slogan" />
        <a href="about.php" title="О компани" class="about">О компании</a>
        <a href="portfolio.php" title="Портфолио" class="works">Портфолио</a>
        <a href="catalog.php" title="Каталог" class="service">Каталог</a>
        <a href="blog.php" title="Новости" class="price">Новости</a>
        <a href="contacts.php" title="Контакты" class="contacts">Контакты</a>
  </div>
      <!--//Главная-->
      
      <!--foter-->
<?php include("foter.php");?>
      <!--//foter--> 

    </div>
  </body>
</html>