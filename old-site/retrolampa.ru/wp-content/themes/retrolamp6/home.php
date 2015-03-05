<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Retrolamp
 */

get_header();
?>

			<div id="slider" class="fon_alt">
                    
                <div class="fixsed">
                
                    <h3 class="title">Последние работы <span></span><span></span></h3>
                    
                    <div class="slider_over">
                        
                        <span id="arrow_left"></span>
                        <span id="arrow_right"></span>
                        
                        <ul class="slider_spisok">
                        	<?
								$args = array(
									'posts_per_page'   => -1,
									'offset'           => 0,
									'category'         => get_cat_ID( 'Последние работы' ),
									'orderby'          => 'post_date',
									'order'            => 'DESC',
									'post_type'        => 'post',
									'post_status'      => 'publish',
									'suppress_filters' => true
								);
		
								$section_post = get_posts( $args );
						
								foreach( $section_post as $post ):
									setup_postdata( $post );
							?>
                            	<li><a href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(300,300));?></a>
                            <?endforeach;?>
                            <?php wp_reset_postdata(); ?>    
                        </ul>
                            
                    </div>
                    
                    <a class="all" href="/?p=32">Посмотреть все работы</a>
                    
                    <div class="clear"></div>
                    
                </div>
                    
            </div>
            
            <div class="info fixsed">
                
                <div class="lamp"></div>
            	<?php $page = get_page_by_title( "Светильники в стиле ретро для ресторанов, кафе, вашего дома" ); ?>
                <h3 class="title_yellow home_title"><?=$page->post_title?></h3>
                <?=$page->post_content?>
            </div>
            
            <div class="fon_alt">
                
                <div class="fixsed over">
                    
                    <div><h3 class="title">Ретро проводка</h3></div>
                    
                    <?
						$args = array(
							'posts_per_page'   => 3,
							'offset'           => 0,
							'category'         => get_cat_ID( 'Ретро проводка' ),
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true
						);
		
						$section_post = get_posts( $args );
						
						foreach( $section_post as $post ):
							setup_postdata( $post );
					?>
					
							<div class="icon">
                        		<a class="icon_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(90,90));?></a>
                        
                        		<div class="description">
                            		<span></span>
                            		<span></span>
                            		<h4><a href="<?=the_permalink();?>"><? the_title(); ?></a></h4>
                            		<p><?=the_excerpt();?></p>
                        		</div>
                    		</div>
					<?endforeach;?>
                    <div class="clear"></div>
                    <a class="all" href="<?=get_category_link( get_cat_ID( 'Ретро проводка' ) );?>">Весь каталог</a>
                    
                </div>
            
            </div>
            
            
            <div class="fixsed over">
                    
                <div><h3 class="title">Ретро светильники</h3></div>
                <?
					$args = array(
						'posts_per_page'   => 3,
						'offset'           => 0,
						'category'         => get_cat_ID( 'Ретро светильники' ),
						'orderby'          => 'post_date',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'post_status'      => 'publish',
						'suppress_filters' => true
					);
		
					$section_post = get_posts( $args );
			
					foreach( $section_post as $post ):
						setup_postdata( $post );
				?>
                		<div class="icon">
                        	<a class="icon_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(90,90));?></a>
                        
                        	<div class="description">
                            	<span></span>
                            	<span></span>
                            	<h4><a href="<?=the_permalink();?>"><? the_title(); ?></a></h4>
                            	<p><?=the_excerpt();?></p>
                        	</div>
                    	</div>
					<?endforeach;?>
                    <div class="clear"></div>
                    
                <a class="all" href="<?=get_category_link( get_cat_ID( 'Ретро светильники' ) );?>">Весь каталог</a>
                    
            </div>
            
            <div class="fon_alt">
            
                <div class="fixsed main_company">
                	<?php $page = get_page_by_title( "О компании" ); ?>
                	<h3 class="title_yellow home_title"><?=$page->post_title?></h3>
               		<?=$page->post_content?>
                </div>
            
            </div>
            	
		<? wp_reset_postdata(); ?>
		
		<div class="fixsed">
            
                <div id="map"></div>
                
                <div class="over">
                    
                    <h3 class="title_yellow">Контакты , размещение заказа</h3>
                    
                    <p>Для того , чтобы заказать ретро-светильник Вам необходимо определиться с формой , материалом , цветом и диаметром плафона или предоставить свой проект.</p>
                    
                    <a class="transition" href="/katalog">перейти в каталог</a>
                    
                </div>
                
                <div class="margin">
                    <h3 class="title_yellow">ООО “Ретро Лампа”</h3>
                    
                    <p>г. Красноармейск ул. Маяковского</p>
                    
                    <p>Тел:  +7(917) 517-78-37</p>
                    
                    <p>Email - romatti@me.com</p>
                </div>
                    
                <div class="clear"></div>
        </div>
        
<?php get_footer(); ?>