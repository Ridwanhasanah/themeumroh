<?php
/*Template Name: Blog Page*/
get_header(); 
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_title();
		the_content();?>
		<div class="twelvecol column">
			<div class="item-grid" >
				<div class="column gallery-item threecol ">
					<div class="tour-thumb-container">
						<div class="tour-thumb">
							<div class="featured-image">
								<img src="">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('normal'); ?></a>
							</div>
						</div>
						<div class="block-background"></div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}else{
	echo "<h4>Maaf Tidak Ada Post<h4>";
}

get_footer(); 

?>