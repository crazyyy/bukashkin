<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Новости компании | Акции</title>
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
  <style type="text/css">
  .enter1 {	font-style: italic;
	color: #ED1C23;
}
  </style>
</head>
  <body>
    <div id="main">
      <!--Шапка-->
<?php include("header.php");?>
      <!--//Шапка-->


              <div id="content">
          <ul class="menu"><li class="item3"><a href="about.php"><span>О компании</span></a></li><li class="item6"><a href="portfolio.php"><span>Портфолио</span></a></li><li class="item2"><a href="catalog.php"><span>Услуги</span></a></li><li id="current" class="active item4"><a href="blog.php"><span>Блог</span></a></li><li class="item5"><a href="contacts.php"><span>Контакты</span></a></li></ul>
          <div class="clear">&nbsp;</div>
           <div id="breadcrumbs">
<a href="http://bukashkin.ru/">Главная<i>/</i></a>Блог</div>

          
          
          



<table class="price" border="0" cellspacing="0">
<tbody>
<tr class="tr_head">
<td><p><span class="enter1">Супер Акция!!!</span></p>
  <p>Если Вы являетесь производителем светильников,</p>
  <p>Мы с удовольствием изготовим Вам плафоны эксклюзивной формы:</p>
  <p><em>Светильники из алюминия</em> до ø 40 см (типа Галон, Муран, Ромикс, Роматти)<br />
    или по Вашим чертежам без покраски, кол-во не менее  1000 штук. <br />
    – 3000 руб/шт </p>
  <p><em>Светильники из латуни</em> до ø 40 см с фурнитурой и отделкой патиной<br />
    – 4000 руб/шт </p>
  <p><em>Светильники из меди</em> и больших диаметров  по запросу</p></td>

</tr>
</tbody>
</table>
<p style="font-size:12px; margin-top: 10px;">&nbsp;</p>
<p> </p>
<table class="price" border="0">
<tbody>
<tr>
<td class="td_head">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td class="td_head">&nbsp;</td>
<td style="text-align:left">&nbsp;</td>
</tr>
<tr>
<td class="td_head">&nbsp;</td>
<td style="text-align:left">&nbsp;</td>
</tr>
</tbody>
</table>





        </div>
      
      <!--foter-->
<?php include("foter.php");?>
      <!--//foter--> 

    </div>
  </body>
</html>