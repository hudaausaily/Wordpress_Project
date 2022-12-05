<?php
/**
 * The template for displaying search form.
 *
 * @package     Pet Food Shop
 * @since       0.1
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'pet-food-shop' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'pet-food-shop' ); ?>" value="" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'pet-food-shop' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>