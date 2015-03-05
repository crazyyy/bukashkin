<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<h3><?the_title();?></h3>
<img src="images/article_img.png" alt="" />

<div class="line"></div>

<div class="dop_article">
	<h3>Еще статьи на эту тему:</h3>
	
	<ul>
		<? // foreach():?>
			<li><a href="/">К героическим поступки склонны тихони</a><span>08 августа 2013</span></li>
		<? // endforeach;?>
	</ul>
</div>

<div id="social">
	<span>Авторизация</span>
	<a href="/"><img src="images/social_1.png" alt=""/></a>
	<a href="/"><img src="images/social_2.png" alt=""/></a>
	<a href="/"><img src="images/social_3.png" alt=""/></a>
	<a href="/"><img src="images/social_4.png" alt=""/></a>
	<a href="/"><img src="images/social_5.png" alt=""/></a>
	<a href="/"><img src="images/social_6.png" alt=""/></a>
	<a href="/"><img src="images/social_7.png" alt=""/></a>
</div>

<div class="clear"></div>
<div id="coments">
	<form>
		<label>Комментарии</label>
		<textarea></textarea>
		<div>
			<input type="submit" value="Добавить" />
			<span></span>
		</div>
	</form>
</div>