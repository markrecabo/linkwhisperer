	<div class="item-link-full-wrapper">
		<a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-no-border item-link-full">Read More</a>
	</div>

	<div class="item-link-buy-wrapper">
	<?php 
	global $edd_options;
	
	$button_text = (empty($edd_options['add_to_cart_text']) ? 'Add to cart' : $edd_options[ 'add_to_cart_text' ]);
	
	if ( ! edd_has_variable_prices( get_the_ID() ) ) {
		$text = edd_get_purchase_link(array(
			'download_id' => get_the_ID()));
		echo edd_get_purchase_link( array(
			'download_id' => get_the_ID(),
			'class' => 'btn btn-solid item-link-buy',
			'text' => $button_text,
			'price' => (bool)false ) );
	} ?>
	</div>

