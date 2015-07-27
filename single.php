<?php get_header(); ?>

<div id="body">
	
	<div class="single">
		<div class="content">
			<?php the_title('<h1>', '</h1>'); ?>
			<div class="details">
				<?php
					$categories = get_the_category();
					foreach ($categories as $category) {
						echo '<div class="category">' . $category->name . '</div>'; 
					}
				?>
				<div class="date"><?php the_time('j F Y') ?></div>
			</div>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php the_content(); ?>					
				</div>
				
				<a href="#" class="button">Bekijk de site</a>
			
				<?php endwhile; else: ?>
			
					<p>Sorry, no posts matched your criteria.</p>
			
			<?php endif; ?>
		</div>
		
		<div class="navigation">
			<ul>
				<li>
					<i class="fa fa-times"></i>
					<label>Naar overzicht</label>
				</li>
				<li>
					<i class="fa fa-angle-left"></i>
					<label>Vorige</label>
				</li>
				<li>
					<i class="fa fa-angle-right"></i>
					<label>Volgende</label>
				</li>
				<li>
					<i class="fa fa-retweet"></i>
					<label>Delen</label>
				</li>
			</ul>
		</div>
		
	</div>
	
</div>

<?php get_footer(); ?>