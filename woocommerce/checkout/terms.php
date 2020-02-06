<?php
/**
 * Checkout terms and conditions area.
 *
 * @package 	WooCommerce/Templates
 * @version 3.4.0
 */
defined( 'ABSPATH' ) || exit;

if ( apply_filters( 'woocommerce_checkout_show_terms', true ) && function_exists( 'wc_terms_and_conditions_checkbox_enabled' ) ) :
		do_action( 'woocommerce_checkout_before_terms_and_conditions' );

	?>
	<div class="woocommerce-terms-and-conditions-wrapper woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;">
		<?php
		/**
		 * Terms and conditions hook used to inject content.
		 *
		 * @since 3.4.0.
		 * @hooked wc_privacy_policy_text() Shows custom privacy policy text. Priority 20.
		 * @hooked wc_terms_and_conditions_page_content() Shows t&c page content. Priority 30.
		 */
		do_action( 'woocommerce_checkout_terms_and_conditions' );
		?>
	</div>

	<p class="form-row validate-required terms wc-terms-and-conditions">
		<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox sod-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); // WPCS: input var ok, csrf ok. ?> id="terms" />
		<label for="terms" class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox"><?php wc_terms_and_conditions_checkbox_text(); ?></span>&nbsp;<span class="required">*</span></label>
		<input type="hidden" name="terms-field" value="1" />
	</p>
	<?php do_action( 'woocommerce_checkout_after_terms_and_conditions' ); ?>
<?php endif; ?>
