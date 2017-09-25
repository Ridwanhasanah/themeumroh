<div class="tour-search-form placeholder-form">
	<div class="form-title">
	<!-- Edited Ridwan Start-->
		<h4><?php _e('Layanan Paket Kami', 'midway'); ?></h4>
	</div>
		<ul class="ulli">
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Plus Istanbul Bursa Cappadoccia
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Plus Kairo Mesir
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Murah Rahmah
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Murah Rahmah 12 Hari
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Plus Dubai
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Plus Istanbul Bursa Cappadoccia
					</a></p>
				</div>
			</li>
			<li class="rleft">
				<div class="colored-icon icon-6"></div>
				<div class="rlayanan">
					<p><a  href="#">Paket Umroh Murah Promo Feabuari 2018
					</a></p>
				</div>
			</li>
		</ul>
	<!-- Edited Ridwan End-->	

	<form role="search" method="get" action="<?php echo SITE_URL; ?>">
		<?php if(!ThemexCore::checkOption('search_destination')) { ?>
		<div class="select-field">
			<span><?php _e('All Destinations','midway'); ?></span>
			<?php 
			wp_dropdown_categories( array(
				'taxonomy' => 'tour_destination', 
				'name' => 'destination', 
				'id' => 'destination', 
				'hierarchical' => 1,
				'orderby' => 'title',
				'show_option_all' => __('All Destinations','midway'), 
				'selected' => isset($_GET['destination'])?$_GET['destination']:'',
			)); 
			?>
		</div>
		<?php } ?>
		<?php if(!ThemexCore::checkOption('search_type')) { ?>
		<div class="select-field">
			<span><?php _e('All Types','midway'); ?></span>
			<?php
			wp_dropdown_categories( array(
				'taxonomy' => 'tour_type', 
				'name' => 'type', 
				'id' => 'type', 
				'hierarchical' => 1,
				'orderby' => 'title',
				'show_option_all' => __('All Types','midway'), 
				'selected' => isset($_GET['type'])?$_GET['type']:'',
			));
			?>
		</div>
		<?php } ?>
		<?php if(!ThemexCore::checkOption('search_date')) { ?>
		<div class="field-container">
			<input type="text" name="date_dep" class="date-field" value="<?php echo isset($_GET['date_dep'])?$_GET['date_dep']:__('Departure Date', 'midway'); ?>" />
		</div>
		<div class="field-container">
			<input type="text" name="date_arr" class="date-field reverse" value="<?php echo isset($_GET['date_arr'])?$_GET['date_arr']:__('Arrival Date', 'midway'); ?>" />
		</div>
		<?php } ?>
		<?php ThemexForm::renderData('search', 'search', $_GET); ?>
		<?php if(!ThemexCore::checkOption('search_price')) { ?>
		<div class="range-slider">
			<div class="range-min"><?php echo ThemexTour::getPrice(0, '<span>', '</span>'); ?></div>
			<div class="range-max"><?php echo ThemexTour::getPrice(0, '<span>', '</span>'); ?></div>
			<div class="ui-slider"></div>
			<input type="hidden" name="price_min" value="<?php echo isset($_GET['price_min'])?$_GET['price_min']:'0'; ?>" class="range-min" />
			<input type="hidden" name="price_max" value="<?php echo isset($_GET['price_max'])?$_GET['price_max']:'0'; ?>" class="range-max" />
			<input type="hidden" value="<?php echo ThemexTour::getMarginalPrice(); ?>" class="range-min-value" />
			<input type="hidden" value="<?php echo ThemexTour::getMarginalPrice(true); ?>" class="range-max-value" />
		</div>
		<?php } ?>
		<!-- <div class="form-button">
			<div class="button-container">
				<a href="#" class="button submit-button"><?php _e('Search Tours','midway'); ?></a>
			</div>
		</div> -->
		<input type="hidden" name="s" value="" />
	</form>
</div>
<!-- tour search form -->