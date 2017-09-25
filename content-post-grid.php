<!-- Edited by RIdwan Start -->
<div class="column gallery-item rthreecol ">
	<div class="tour-thumb-container">
		<div class="tour-thumb">
			<article <?php post_class('post'); ?>>
				<?php if(has_post_thumbnail()) { ?>
				<div lass="grid-img">
					<?php the_post_thumbnail('small'); ?>
				</div>
				<?php }else{ ?>
				<div lass="grid-img">
					<img src="<?php bloginfo('stylesheet_directory');?>/inc/images/thumb.jpg"/>
				</div>
					<?php } ?>
				<div class="post-content">
					<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<div class="tour-meta">
						<div class="tour-destination">
							<div class="colored-icon icon-1"></div>
							<div class="post-info">
								<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
							</div>
						</div>
					</div>
				</div>
				<!-- <footer class="post-footer clearfix">
					<a href="<?php the_permalink(); ?>" class="button small"><?php _e('Read More','midway'); ?></a>
					<?php if(comments_open()) { ?>
					<div class="post-comment-count"><?php comments_number('0','1','%'); ?></div>
					<?php } ?>
					<div class="post-info">
						<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
					</div>
				</footer> -->
			</article>
		</div>
		<div class="block-background"></div>
	</div>
</div>
<!-- Edited by RIdwan End -->