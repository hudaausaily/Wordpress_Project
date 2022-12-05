<?php
/**
 * side bar template
 *
 * @package Pet Food Shop
 */
?>
<?php if ( ! is_active_sidebar( 'petfoodshop-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('petfoodshop-woocommerce-sidebar'); ?>
	</div>
</div>