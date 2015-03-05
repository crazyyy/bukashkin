<aside>
	
	<h3 class="title">Последние работы <span></span><span></span></h3>
	<div  class="ctegory_catalog">
		<span class="chain_L"></span>
		<span class="chain_R"></span>
		<ul>
			<?php
				$args = array(
					'posts_per_page'   => 5,
					'offset'           => 0,
					'category'         => get_cat_ID( 'Красота' ),
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true
				);
				$news = get_posts( $args );
			
				foreach( $news as $post ) : 
					setup_postdata( $post );
			?>
				<li><a href="<?=the_permalink();?>" class="inline"><? the_title(); ?></a><span></span></li>
			<?php endforeach;?>
		</ul>
	</div>
	 
 
</aside>
<?php wp_reset_postdata(); ?>	 
<!--
			<div class="icon">
				<div ><span class="time"><?//the_time('d.m.Y');?></span></div>
				<a class="icon_pic" href="<?//=the_permalink();?>"><?//=get_the_post_thumbnail($post->ID, 'thumbnail');?></a>
				<div>
					<h3><a href="<?//=the_permalink();?>"><?//=the_title();?></a></h3>
					<?//=the_excerpt();?>
					<div class="link">
						<a href="<?//=the_permalink();?>#comments">коментарии</a>
						<a href="<?//=the_permalink();?>">просмотр</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
-->