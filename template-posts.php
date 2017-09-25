<?php
/*
Template Name: Posts
*/
/*=== Edited by Ridwan Start ===*/
get_header();
?>
<div class="twelvecol column">
	<div class="items-grid" >
		<div class="fullwidth-section">
			<?php echo themex_content(category_description()); ?>
			<div class="blog-listing">
				<?php 
				if(is_page()) {
					query_posts(array(
						'post_type' =>'post',
						'paged' => themex_paged(),
						));
				}
				?>
				<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post();	
						get_template_part('content', 'post-grid');
					}
				}	?>
			</div>
		</div>
	</div>
</div>
<?php ThemexInterface::renderPagination(); ?>
<?php get_footer(); 
/*=== Edited by Ridwan End ===*/
?>
