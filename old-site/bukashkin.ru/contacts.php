<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Контакты Romatti</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <base href="http://bukashkin.ru/" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.jcarousel.css" />
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


              <div id="content">
        <ul class="menu">
        <li class="item3"><a href="../about.php"><span>О компании</span></a></li>
        <li class="item6"><a href="../portfolio.php"><span>Портфолио</span></a></li>
        <li class="item2"><a href="../catalog.php"><span>Каталог</span></a></li>
          <li class="item4"><a href="../blog.php"><span>Блог</span></a></li>
          <li id="current" class="active item5"><a href="../contacts.php"><span>Контакты</span></a></li></ul>
          <div class="clear">&nbsp;</div>
<div id="breadcrumbs">
<a href="http://bukashkin.ru/">Главная<i>/</i></a>Контакты</div>
          
          
          
<noindex>
<table class="price" border="0" cellspacing="0">
<tbody>
<tr class="tr_head">
<td><p>Наша мастерская и склад находится по адресу:</p>
<p>Московская обл., г. Красноармейск, ул. Маяковского, д.48</p>
<p>Шоу-рум:</p>
<p>ТЦ "Строим Дом", Ярославское ш (4 км от МКАД).</p>
<p>По вопросам оптовых и розничных закупок: +7 926 100 95 56 Роман</p>
<p>Для всех регионов России: +7 926 603 18 36</p>
<p>e-mail: <a href="mailto:stariysvet@gmail.com">stariysvet@gmail.com</a></p></br>
<p>web: | <a href="http://bukashkin.ru" title="творческая мастерская роматти" target="_new">www.bukashkin.ru</a> | <a href="http://www.romatti.ru" title="освещение баров, кафе, ресторанов" target="_new">www.romatti.ru</a> | </p>
<p>Интернет магазин светильников: | <a href="http://xn--80aqkhjpa.xn--p1ai/">Роматти.рф</a> | </p></tr>
</tbody>
</table>
<p>&nbsp;</p>
</noindex>




        </div>
      
      <!--foter-->
<?php include("foter.php");?>
      <!--//foter--> 

    </div>
  </body>
</html>