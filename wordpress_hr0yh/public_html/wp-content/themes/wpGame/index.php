<?php  get_header(); ?>

	<section class="content">

	<?php		
			global $post;

			$query = new WP_Query( [
				'posts_per_page' => 1,
				'category_name'        => 'NEWEST',
			] );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
						<div class="game-card game-card__order game-card__main">
							<div class="game-photo">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="game-info">
								<a href="#" class="btn-filter">NEWEST</a>
								<h2> <?php the_title(); ?></h2>
								<p><?php echo  get_the_excerpt(); ?></p>
								<div class="game-platforms">
									<img src="<?php echo get_template_directory_uri() ?>/img/icons/ps.svg" alt="Playstation"><img src="<?php echo get_template_directory_uri() ?>/img/icons/xbox.svg" alt="Xbox"><img src="<?php echo get_template_directory_uri() ?>/img/icons/win.svg" alt="Windows">
								</div>
								<div class="game-price">
									<span>$59.99</span><button class="btn-cart">Pre order</button>
								</div>
							</div>
						</div>
					<?php 
				}
			} else {
				// Постов не найдено
			}

			wp_reset_postdata(); // Сбрасываем $post
	?>

		

		<?php		
			global $post;

			$query = new WP_Query( [
				'posts_per_page' => 5,
				'category_name'        => 'games',
			] );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<a href="<?php echo get_the_permalink();  ?>" class="game-card game-card__small">
						<div class="game-photo">
							<img src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="game-info">
							<h4><?php the_title(); ?></h4>
							<span class="game-genre">Action, Adventure</span>
							<div class="game-price"><span>$25.60</span></div>
						</div>
					</a>
					<!-- Вывод постов, функции цикла: the_title() и т.д. -->
					<?php 
				}
			} else {
				// Постов не найдено
			}

			wp_reset_postdata(); // Сбрасываем $post
		?>



	</section>


    <?php wp_footer(); ?>
</body>
</html>