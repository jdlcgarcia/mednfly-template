<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */

$cols = "";
$i = 0;
?>
<?php if($atts['type']['type'] == 'style1'): ?>
	<?php foreach($atts['type']['style1']['add'] as $item): ?>
		<?php $cols = 12/$atts['type']['style1']['cols']; $i++; if($i%$cols == 1 && count($atts['type']['style1']['add']) > $cols) echo '<div class="fw-row">'; ?>
		<!-- Icon box -->
		<div class="fw-col-sm-<?php echo esc_attr($atts['type']['style1']['cols']); ?> icon-box-item">
			<?php if(!empty($item['icon'])): ?>
				<div class="icon <?php echo esc_attr($item['icon']); ?>"></div>
			<?php endif; ?>
			<div class="text">
				<div class="h4"><?php echo esc_attr($item['title']); ?></div>
				<p><?php echo esc_attr($item['text']); ?></p>
			</div>
		</div>
		<!-- END Icon box -->
		<?php if($i%$cols == 0 && count($atts['type']['style1']['add']) > $cols) echo '</div>'; ?>
	<?php endforeach; ?>
<?php endif; if($atts['type']['type'] == 'style2'): ?>
	<?php 
		if ($atts['type']['style2']['mobile_cols']) {
			$cols .= 'fw-col-xs-'.$atts['type']['style2']['mobile_cols'].' ';
		} else {
			$cols .= 'fw-col-xs-12 ';
		}
		if ($atts['type']['style2']['tablet_cols']) {
			$cols .= 'fw-col-sm-'.$atts['type']['style2']['tablet_cols'].' ';
		} else {
			$cols .= 'fw-col-sm-6 ';
		}
		if ($atts['type']['style2']['desktop_cols']) {
			$cols .= 'fw-col-md-'.$atts['type']['style2']['desktop_cols'].' ';
		} else {
			$cols .= 'fw-col-md-6 ';
		}
		if ($atts['type']['style2']['large_desktop_cols']) {
			$cols .= 'fw-col-lg-'.$atts['type']['style2']['large_desktop_cols'].' ';
		}  else {
			$cols .= 'fw-col-lg-3 ';
		}

		if(isset($atts['type']['style2']['uppercase']) && $atts['type']['style2']['uppercase'] == 'yes') {
			$cols .= 'uppercase ';
		}

		if(isset($atts['type']['style2']['light']) && $atts['type']['style2']['light'] == 'yes') {
			$cols .= 'light ';
		}
	?>
	<?php foreach($atts['type']['style2']['add'] as $item): ?>
		<!-- Icon box style 2 -->
		<div class="icon-box2-item <?php echo esc_attr($cols); ?>">
			<?php if(!empty($item['icon'])): ?>
				<div class="icon <?php echo esc_attr($item['icon']); ?>"></div>
			<?php endif; ?>
			<span><?php echo esc_html($item['pre']); ?></span>
			<div class="number<?php if($atts['type']['style2']['animate'] == 'yes') echo ' animateNumber'; ?>" data-num="<?php echo esc_html($item['num']); ?>"><?php if($atts['type']['style2']['animate'] == 'no') echo esc_html($item['num']); else echo '0'; ?></div>
			<h4><?php echo esc_html($item['title']); ?></h4>
		</div>
		<!-- END Icon box style 2 -->
	<?php endforeach; ?>
<?php endif; if($atts['type']['type'] == 'style3'): ?>
	<?php 
		if ($atts['type']['style3']['mobile_cols']) {
			$cols .= 'fw-col-xs-'.$atts['type']['style3']['mobile_cols'].' ';
		} else {
			$cols .= 'fw-col-xs-12 ';
		}
		if ($atts['type']['style3']['tablet_cols']) {
			$cols .= 'fw-col-sm-'.$atts['type']['style3']['tablet_cols'].' ';
		} else {
			$cols .= 'fw-col-sm-6 ';
		}
		if ($atts['type']['style3']['desktop_cols']) {
			$cols .= 'fw-col-md-'.$atts['type']['style3']['desktop_cols'].' ';
		} else {
			$cols .= 'fw-col-md-6 ';
		}
		if ($atts['type']['style3']['large_desktop_cols']) {
			$cols .= 'fw-col-lg-'.$atts['type']['style3']['large_desktop_cols'].' ';
		}  else {
			$cols .= 'fw-col-lg-3 ';
		}
	?>
	<div class="icon-box-area fw-row">
		<?php foreach($atts['type']['style3']['add'] as $item): ?>
		<!-- Icon box item -->
		<div class="icon-box-col <?php echo esc_attr($cols); ?>">
			<div class="icon <?php if($item['big'] == 'yes') echo' big'; ?> <?php echo esc_attr($item['icon']); ?>"></div>
			<div class="h4"><?php echo esc_html($item['title']); ?></div>
			<p><?php echo esc_html($item['text']); ?></p>
			<?php if(!empty($item['link']) && !empty($item['link_text'])) { ?>
			<a href="<?php echo esc_url($item['link']); ?>" class="button-style2 gray min"><span><?php echo esc_html($item['link_text']); ?></span></a>
			<?php } ?>
		</div>
		<!-- END Icon box item -->
		<?php endforeach; ?>
	</div>
<?php endif; ?>
