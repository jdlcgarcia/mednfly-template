<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

$category_ids = '';

for ($i=0; $i < count($atts['items']); $i++) { 
	$category_ids .= $atts['items'][$i].',';
}

$category_items = get_posts( array(
	'numberposts'     => $atts['number_posts'],
	'category'        => $category_ids,
	'orderby'         => $atts['orderby'],
	'order'           => $atts['order'],
	'post_type'       => 'post',
	)
);

?>

<div class="blog-items fw-row">
	<?php foreach($category_items as $item ):
		$id = $item->ID; 
		$item = get_post($id);
		setup_postdata($item);
		$month = mysql2date('M', $item->post_date);
		$day = mysql2date('d', $item->post_date);
		$full_date = mysql2date('d/m/Y', $item->post_date);
		$name = $item->post_title;
		$thumb = get_post_meta( $id, '_thumbnail_id', true );
		$image_array = wp_get_attachment_image_src( $thumb , 'full' );
		$image_full = $image_array[0];
		$link = get_permalink($id);

		if($atts['style'] == "style1") {
			$block_class = 'fw-col-xs-12 fw-col-md-4';
			$image_class = 'fw-col-xs-12 fw-col-sm-5 fw-col-md-12';
			$content_class = 'fw-col-xs-12 fw-col-sm-7 fw-col-md-12';
			if ($atts['desc_size']) {
				$desc_size = $atts['desc_size'];
			} else {
				$desc_size = '140';
			}
		} else {
			$block_class = 'fw-col-xs-12';
			$image_class = 'fw-col-sm-4';
			$content_class = 'fw-col-sm-8';
			if ($atts['desc_size']) {
				$desc_size = $atts['desc_size'];
			} else {
				$desc_size = '430';
			}
		}

		$desc = strip_tags($item->post_content);
		$desc = substr($desc, 0, $desc_size);
		$desc = rtrim($desc, "!,.-");
		$desc = substr($desc, 0, strrpos($desc, ' '))."...";

		$cols = '2';
	?>
	<!-- Blog item -->
	<div class="blog-item <?php echo esc_attr($block_class) ?>">
		<div class="fw-row">
			<?php if($image_full): ?>
				<div class="image <?php echo esc_attr($image_class) ?>"><a href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url(fw_resize($image_full, 370, 270, true)); ?>" alt="<?php echo esc_html($name); ?>"></a></div>
			<?php endif; ?>
			<div class="<?php echo esc_attr($content_class) ?>">
				<h4><?php echo esc_html($name); ?></h4>
				<p><?php echo esc_html($desc); ?></p>
			</div>
		</div>
	</div>
	<!-- END Blog item -->
	<?php endforeach; ?>
</div>