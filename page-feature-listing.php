<?php
	//Template Name: Feature Listing
?>

<?php get_header(); ?>

<div id="body">
	
	<div class="feature-list">
		
		<div class="billboard">
			<div class="image">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="content">
				<div class="container-table">
					<div class="container-table-cell">
						<h5>Wat we doen</h5>
						<h2>Online doelstellingen realiseren voor onze klanten</h2>
					</div>
				</div>
			</div>
			<div class="color-mask">
				Color Mask
			</div>
		</div>
		
		<div class="content">
			
			<?php
			
			// check if the repeater field has rows of data
			if( have_rows('feature_list__list_item') ):
			
			 	// loop through the rows of data
			    while ( have_rows('feature_list__list_item') ) : the_row();
			
			?>
			
			        <div class="b1">
						<div class="info">
							<h3><?php echo get_sub_field('feature_list__list_item__subtitle') ?></h3>
							<h2><?php echo get_sub_field('feature_list__list_item__title') ?></h2>
							<div class="text">
								<?php echo get_sub_field('feature_list__list_item__content') ?>
							</div>
						</div>
						
						<?php 

						$image = get_sub_field('feature_list__list_item__image');
						$url = $image['url'];
						$size = 'medium';
						$thumb = $image['sizes'][ $size ];
						
						echo '<div class="image" style="background-image: url(' . $url . ')"></div>';
						
						 ?>
					</div>
			
			<?php
				
			    endwhile;
			
			else :
			
			    // no rows found
			
			endif;
			
			?>
			
			<script type="text/javascript">
			jQuery(function() {
				jQuery(document).ready(function() {
					var win = jQuery(this); //this = window
				    if (win.height() >= 820) {
					    jQuery('#image').insertBefore('#info');
				    } 
				});
			});  
			</script> 
			
		</div>
		
	</div>

</div>

<?php get_footer(); ?>