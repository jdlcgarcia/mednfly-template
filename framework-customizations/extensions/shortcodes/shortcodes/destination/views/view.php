<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

$id = uniqid('team-carousel-');

?>
<?php if($atts['config']['type'] == 'slider'): ?>
	<?php if(count($atts['items']) > 1): ?>
		<?php
			wp_enqueue_script( 'medina-script-js', get_template_directory_uri() . '/js/script.js' );

			wp_add_inline_script('medina-script-js', "jQuery(document).ready(function(jQuery) {
			  	jQuery('.".$id."').owlCarousel({
					loop:true,
					items:3,
					margin: 30,
					nav: ".$atts['config']['slider']['nav'].",
					dots: ".$atts['config']['slider']['dot'].",
					autoplay: ".$atts['config']['slider']['autoplay'].",
					autoplayTimeout: ".$atts['config']['slider']['autoplay-timeout'].",
					autoplayHoverPause: true,
					navClass: ['owl-prev icon-font icon-left-arrow','owl-next icon-font icon-right-arrow'],
					navText: false,
					dotsEach: true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1000:{
							items:3
						}
					}
				});
			});");
		 ?>
	<?php endif; ?>
	<div class="team-carousel <?php echo esc_attr($id); ?>">
<?php endif; ?>
	<?php foreach($atts['items'] as $item): ?>
		<?php if($atts['config']['type'] == 'grid'): ?>
			<div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-<?php echo esc_attr($atts['config']['grid']['cols']); ?>">
		<?php endif; ?>
		<div class="team-item">
			<?php if(!empty($item['image']['url'])): ?>
				<div class="image"><a href="<?php echo esc_url($item['link']); ?>"><img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo esc_html($item['name']); ?>"></a></div>
			<?php endif; ?>
			<div class="name">
				<h4><?php echo esc_html($item['name']); ?></h4>
				<span><?php echo esc_html($item['post']); ?></span>
			</div>
			
			<div class="timetable">
				<div class="item">
					<div class="label">Hotel</div>
					<div class="value"><?php echo esc_html($item['hotel']); ?></div>
				</div>
				<div class="item">
					<div class="label">Weather</div>
					<div class="value"><?php echo esc_html($item['weather']); ?></div>
				</div>
				<div class="item">
					<div class="label">Land</div>
					<div class="value"><?php echo esc_html($item['land']); ?></div>
				</div>
			</div>
			
			<?php if(!empty($item['link'])): ?>
				<a href="<?php echo esc_url($item['link']); ?>" class="button-style2"><span>read more</span></a>
			<?php endif; ?>
		</div>
		<?php if($atts['config']['type'] == 'grid'): ?>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
<?php if($atts['config']['type'] == 'slider'): ?>
	</div>
<?php endif; ?>