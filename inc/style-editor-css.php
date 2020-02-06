/* GENERATED BY thesod THEME OPTIONS */

<?php if($fonts_url = thesod_google_fonts_url()) : ?>
@import url( '<?php echo $fonts_url; ?>' );
<?php endif; ?>

<?php thesod_custom_fonts(); ?>

.mce-content-body.page_title_content {
	background: url('../images/transparent-pattern.png') repeat 0 0;
}

.wp-block {
	max-width: 867px;
}
.wp-block[data-align="wide"] {
	max-width: 1170px;
}
.wp-block[data-align="full"] {
	max-width: none;
}

p {
	margin: 0 0 1.1em;
}
a {
	-o-transition: color 0.3s, background-color 0.3s;
	-webkit-transition: color 0.3s, background-color 0.3s;
	transition: color 0.3s, background-color 0.3s;
}
button {
	outline: none;
}
h1:first-child {
	margin-top: -10px;
}
h1,
.title-h1 {
	margin: 1.4em 0;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
h2,
.title-h2 {
	text-transform: uppercase;
	margin: 1.2em 0;
	letter-spacing: 0.05em;
}
h3,
.title-h3 {
	text-transform: uppercase;
	margin: 1.13em 0;
	letter-spacing: 0.05em;
}
h4,
.title-h4 {
	text-transform: uppercase;
	margin: 1em 0;
	letter-spacing: 0.05em;
}
h5,
.title-h5 {
	text-transform: uppercase;
	margin: 0.5em 0;
	letter-spacing: 0.05em;
}
h6,
.title-h6 {
	text-transform: uppercase;
	margin: 1.19em 0;
	letter-spacing: 0.05em;
}
.title-xlarge {
	margin: 1.4em 0;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
h1 .light,
h2 .light,
h3 .light,
h4 .light,
h5 .light,
h6 .light,
.title-h1 .light,
.title-h2 .light,
.title-h3 .light,
.title-h4 .light,
.title-h5 .light,
.title-h6 .light,
.title-xlarge .light {
	text-transform: uppercase;
	font-size: inherit;
	line-height: inherit;
}
.letter-spacing {
	letter-spacing: 0.05em;
}

<?php if(thesod_get_option('disable_uppercase_font')) : ?>
body h1,
body h2,
body h3,
body h4,
body h5,
body h6,
body .title-h1,
body .title-h2,
body .title-h3,
body .title-h4,
body .title-h5,
body .title-h6,
body h1 .light,
body h2 .light,
body h3 .light,
body h4 .light,
body h5 .light,
body h6 .light,
body .title-h1 .light,
body .title-h2 .light,
body .title-h3 .light,
body .title-h4 .light,
body .title-h5 .light,
body .title-h6 .light,
body .title-xlarge,
body .title-xlarge .light {
	text-transform: none ;
}
<?php endif; ?>

<?php if(thesod_get_option('styled_subtitle_font_family')) : ?>
.styled-subtitle {
	font-family: '<?php echo thesod_get_option('styled_subtitle_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('styled_subtitle_font_style')) : ?>
.styled-subtitle {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('styled_subtitle_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('styled_subtitle_font_style'), 'italic') !== false) : ?>
.styled-subtitle {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('styled_subtitle_font_size')) : ?>
.styled-subtitle {
	font-size: <?php echo thesod_get_option('styled_subtitle_font_size'); ?>px;
}
@media (max-width: 600px) {
	.styled-subtitle {
		font-size: <?php echo (thesod_get_option('styled_subtitle_font_size')*100/600); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('styled_subtitle_line_height')) : ?>
.styled-subtitle {
	line-height: <?php echo thesod_get_option('styled_subtitle_line_height'); ?>px;
}
@media (max-width: 600px) {
	.styled-subtitle {
		line-height: <?php echo (thesod_get_option('styled_subtitle_line_height')*100/600); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('styled_subtitle_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('styled_subtitle_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	.styled-subtitle {
		font-size: <?php echo thesod_get_option('styled_subtitle_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('styled_subtitle_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	.styled-subtitle {
		line-height: <?php echo thesod_get_option('styled_subtitle_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('styled_subtitle_font_size_mobile')) : ?>
@media (max-width: 767px) {
	.styled-subtitle {
		font-size: <?php echo thesod_get_option('styled_subtitle_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('styled_subtitle_line_height_mobile')) : ?>
@media (max-width: 767px) {
	.styled-subtitle {
		line-height: <?php echo thesod_get_option('styled_subtitle_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h1_font_family')) : ?>
h1,
.title-h1 {
	font-family: '<?php echo thesod_get_option('h1_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h1_font_style')) : ?>
h1,
.title-h1 {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h1_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h1_font_style'), 'italic') !== false) : ?>
h1,
.title-h1 {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h1_font_size')) : ?>
h1,
.title-h1 {
	font-size: <?php echo thesod_get_option('h1_font_size'); ?>px;
}
@media (max-width: 1000px) {
	h1,
	.title-h1 {
		font-size: <?php echo (thesod_get_option('h1_font_size')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('h1_line_height')) : ?>
h1,
.title-h1 {
	line-height: <?php echo thesod_get_option('h1_line_height'); ?>px;
}
@media (max-width: 1000px) {
	h1,
	.title-h1 {
		line-height: <?php echo (thesod_get_option('h1_line_height')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('h1_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h1_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h1,
	.title-h1 {
		font-size: <?php echo thesod_get_option('h1_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h1_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h1,
	.title-h1 {
		line-height: <?php echo thesod_get_option('h1_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h1_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h1,
	.title-h1 {
		font-size: <?php echo thesod_get_option('h1_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h1_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h1,
	.title-h1 {
		line-height: <?php echo thesod_get_option('h1_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h2_font_family')) : ?>
h2,
.title-h2 {
	font-family: '<?php echo thesod_get_option('h2_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h2_font_style')) : ?>
h2,
.title-h2 {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h2_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h2_font_style'), 'italic') !== false) : ?>
h2,
.title-h2 {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h2_font_size')) : ?>
h2,
.title-h2 {
	font-size: <?php echo thesod_get_option('h2_font_size'); ?>px;
}
@media (max-width: 1000px) {
	h2,
	.title-h2 {
		font-size: <?php echo (thesod_get_option('h2_font_size')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('h2_line_height')) : ?>
h2,
.title-h2 {
	line-height: <?php echo thesod_get_option('h2_line_height'); ?>px;
}
@media (max-width: 1000px) {
	h2,
	.title-h2 {
		line-height: <?php echo (thesod_get_option('h2_line_height')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('h2_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h2_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h2,
	.title-h2 {
		font-size: <?php echo thesod_get_option('h2_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h2_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h2,
	.title-h2 {
		line-height: <?php echo thesod_get_option('h2_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h2_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h2,
	.title-h2 {
		font-size: <?php echo thesod_get_option('h2_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h2_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h2,
	.title-h2 {
		line-height: <?php echo thesod_get_option('h2_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h3_font_family')) : ?>
h3,
.title-h3 {
	font-family: '<?php echo thesod_get_option('h3_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h3_font_style')) : ?>
h3,
.title-h3 {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h3_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h3_font_style'), 'italic') !== false) : ?>
h3,
.title-h3 {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h3_font_size')) : ?>
h3,
.title-h3 {
	font-size: <?php echo thesod_get_option('h3_font_size'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h3_line_height')) : ?>
h3,
.title-h3 {
	line-height: <?php echo thesod_get_option('h3_line_height'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h3_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h3_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h3,
	.title-h3 {
		font-size: <?php echo thesod_get_option('h3_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h3_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h3,
	.title-h3 {
		line-height: <?php echo thesod_get_option('h3_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h3_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h3,
	.title-h3 {
		font-size: <?php echo thesod_get_option('h3_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h3_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h3,
	.title-h3 {
		line-height: <?php echo thesod_get_option('h3_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h4_font_family')) : ?>
h4,
.title-h4 {
	font-family: '<?php echo thesod_get_option('h4_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h4_font_style')) : ?>
h4,
.title-h4 {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h4_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h4_font_style'), 'italic') !== false) : ?>
h4,
.title-h4 {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h4_font_size')) : ?>
h4,
.title-h4 {
	font-size: <?php echo thesod_get_option('h4_font_size'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h4_line_height')) : ?>
h4,
.title-h4 {
	line-height: <?php echo thesod_get_option('h4_line_height'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h4_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h4_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h4,
	.title-h4 {
		font-size: <?php echo thesod_get_option('h4_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h4_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h4,
	.title-h4 {
		line-height: <?php echo thesod_get_option('h4_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h4_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h4,
	.title-h4 {
		font-size: <?php echo thesod_get_option('h4_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h4_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h4,
	.title-h4 {
		line-height: <?php echo thesod_get_option('h4_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h5_font_family')) : ?>
h5,
.sod-table thead th,
.title-h5,
blockquote.wp-block-quote.is-large,
blockquote.wp-block-quote.is-style-large {
	font-family: '<?php echo thesod_get_option('h5_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h5_font_style')) : ?>
h5,
.title-h5,
blockquote.wp-block-quote.is-large,
blockquote.wp-block-quote.is-style-large {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h5_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h5_font_style'), 'italic') !== false) : ?>
h5,
.title-h5,
blockquote.wp-block-quote.is-large,
blockquote.wp-block-quote.is-style-large,
.woocommerce .woocommerce-checkout.woocommerce-checkout-one-page .shop_table.woocommerce-checkout-payment-total th {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h5_font_size')) : ?>
h5,
.title-h5,
blockquote.wp-block-quote.is-large,
blockquote.wp-block-quote.is-style-large {
	font-size: <?php echo thesod_get_option('h5_font_size'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h5_line_height')) : ?>
h5,
.title-h5,
blockquote.wp-block-quote.is-large,
blockquote.wp-block-quote.is-style-large {
	line-height: <?php echo thesod_get_option('h5_line_height'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h5_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h5_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h5,
	.title-h5,
	blockquote.wp-block-quote.is-large,
	blockquote.wp-block-quote.is-style-large {
		font-size: <?php echo thesod_get_option('h5_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h5_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h5,
	.title-h5,
	blockquote.wp-block-quote.is-large,
	blockquote.wp-block-quote.is-style-large {
		line-height: <?php echo thesod_get_option('h5_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h5_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h5,
	.title-h5,
	blockquote.wp-block-quote.is-large,
	blockquote.wp-block-quote.is-style-large {
		font-size: <?php echo thesod_get_option('h5_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h5_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h5,
	.title-h5,
	blockquote.wp-block-quote.is-large,
	blockquote.wp-block-quote.is-style-large {
		line-height: <?php echo thesod_get_option('h5_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h6_font_family')) : ?>
h6,
.title-h6 {
	font-family: '<?php echo thesod_get_option('h6_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('h6_font_style')) : ?>
h6,
.title-h6 {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('h6_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('h6_font_style'), 'italic') !== false) : ?>
h6,
.title-h6 {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('h6_font_size')) : ?>
h6,
.title-h6 {
	font-size: <?php echo thesod_get_option('h6_font_size'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h6_line_height')) : ?>
h6,
.title-h6 {
	line-height: <?php echo thesod_get_option('h6_line_height'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('h6_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('h6_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	h6,
	.title-h6 {
		font-size: <?php echo thesod_get_option('h6_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h6_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	h6,
	.title-h6 {
		line-height: <?php echo thesod_get_option('h6_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h6_font_size_mobile')) : ?>
@media (max-width: 767px) {
	h6,
	.title-h6 {
		font-size: <?php echo thesod_get_option('h6_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('h6_line_height_mobile')) : ?>
@media (max-width: 767px) {
	h6,
	.title-h6 {
		line-height: <?php echo thesod_get_option('h6_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('xlarge_title_font_family')) : ?>
.title-xlarge {
	font-family: '<?php echo thesod_get_option('xlarge_title_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('xlarge_title_font_style')) : ?>
.title-xlarge {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('xlarge_title_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('xlarge_title_font_style'), 'italic') !== false) : ?>
.title-xlarge {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('xlarge_title_font_size')) : ?>
.title-xlarge {
	font-size: <?php echo thesod_get_option('xlarge_title_font_size'); ?>px;
}
@media (max-width: 1000px) {
	.title-xlarge{
		font-size: <?php echo (thesod_get_option('xlarge_title_font_size')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('xlarge_title_line_height')) : ?>
.title-xlarge {
	line-height: <?php echo thesod_get_option('xlarge_title_line_height'); ?>px;
}
@media (max-width: 1000px) {
	.title-xlarge {
		line-height: <?php echo (thesod_get_option('xlarge_title_line_height')*100/1000); ?>vw;
	}
}
<?php endif; ?>

<?php if(thesod_get_option('xlarge_custom_responsive_fonts')) : ?>
<?php if(thesod_get_option('xlarge_font_size_tablet')) : ?>
@media (max-width: 1199px) {
	.title-xlarge {
		font-size: <?php echo thesod_get_option('xlarge_font_size_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('xlarge_line_height_tablet')) : ?>
@media (max-width: 1199px) {
	.title-xlarge {
		line-height: <?php echo thesod_get_option('xlarge_line_height_tablet'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('xlarge_font_size_mobile')) : ?>
@media (max-width: 767px) {
	.title-xlarge {
		font-size: <?php echo thesod_get_option('xlarge_font_size_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php if(thesod_get_option('xlarge_line_height_mobile')) : ?>
@media (max-width: 767px) {
	.title-xlarge {
		line-height: <?php echo thesod_get_option('xlarge_line_height_mobile'); ?>px;
	}
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('light_title_font_family')) : ?>
h1 .light,
h2 .light,
h3 .light,
h4 .light,
h5 .light,
h6 .light,
.title-h1 .light,
.title-h2 .light,
.title-h3 .light,
.title-h4 .light,
.title-h5 .light,
.title-h6 .light,
.title-xlarge .light,
h1.light,
h2.light,
h3.light,
h4.light,
h5.light,
h6.light,
.title-h1.light,
.title-h2.light,
.title-h3.light,
.title-h4.light,
.title-h5.light,
.title-h6.light,
.title-xlarge.light {
	font-family: '<?php echo thesod_get_option('light_title_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('light_title_font_style')) : ?>
h1 .light,
h2 .light,
h3 .light,
h4 .light,
h5 .light,
h6 .light,
.title-h1 .light,
.title-h2 .light,
.title-h3 .light,
.title-h4 .light,
.title-h5 .light,
.title-h6 .light,
.title-xlarge .light,
h1.light,
h2.light,
h3.light,
h4.light,
h5.light,
h6.light,
.title-h1.light,
.title-h2.light,
.title-h3.light,
.title-h4.light,
.title-h5.light,
.title-h6.light,
.title-xlarge.light {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('light_title_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('light_title_font_style'), 'italic') !== false) : ?>
h1 .light,
h2 .light,
h3 .light,
h4 .light,
h5 .light,
h6 .light,
.title-h1 .light,
.title-h2 .light,
.title-h3 .light,
.title-h4 .light,
.title-h5 .light,
.title-h6 .light,
.title-xlarge .light,
h1.light,
h2.light,
h3.light,
h4.light,
h5.light,
h6.light,
.title-h1.light,
.title-h2.light,
.title-h3.light,
.title-h4.light,
.title-h5.light,
.title-h6.light,
.title-xlarge.light {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('body_font_family')) : ?>
body {
	font-family: '<?php echo thesod_get_option('body_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('body_font_style')) : ?>
body {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('body_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('body_font_style'), 'italic') !== false) : ?>
body {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('body_font_size')) : ?>
body {
	font-size: <?php echo thesod_get_option('body_font_size'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('body_line_height')) : ?>
body {
	line-height: <?php echo thesod_get_option('body_line_height'); ?>px;
}
<?php endif; ?>

<?php if(thesod_get_option('button_font_family')) : ?>
input[type='submit'],
body .wp-block-button .wp-block-button__link {
	font-family: '<?php echo thesod_get_option('button_font_family'); ?>';
}
<?php endif; ?>

<?php if(thesod_get_option('button_font_style')) : ?>
input[type='submit'],
body .wp-block-button .wp-block-button__link {
	font-weight: <?php echo str_replace(array('italic', 'regular'),array('', 'normal'),thesod_get_option('button_font_style')); ?>;
}
<?php if(strpos(thesod_get_option('button_font_style'), 'italic') !== false) : ?>
input[type='submit'],
body .wp-block-button .wp-block-button__link {
	font-style: italic;
}
<?php endif; ?>
<?php endif; ?>

<?php if(thesod_get_option('body_color')) : ?>
body,
blockquote {
	color: <?php echo thesod_get_option('body_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h1_color')) : ?>
h1,
.title-h1 {
	color: <?php echo thesod_get_option('h1_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h2_color')) : ?>
h2,
.title-h2 {
	color: <?php echo thesod_get_option('h2_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h3_color')) : ?>
h3,
.title-h3 {
	color: <?php echo thesod_get_option('h3_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h4_color')) : ?>
h4,
.title-h4 {
	color: <?php echo thesod_get_option('h4_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h5_color')) : ?>
h5,
.title-h5 {
	color: <?php echo thesod_get_option('h5_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('h6_color')) : ?>
h6,
.title-h6 {
	color: <?php echo thesod_get_option('h6_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('link_color')) : ?>
a {
	color: <?php echo thesod_get_option('link_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('hover_link_color')) : ?>
a:hover {
	color: <?php echo thesod_get_option('hover_link_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('active_link_color')) : ?>
a:active {
	color: <?php echo thesod_get_option('active_link_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('button_text_basic_color')) : ?>
body .wp-block-button .wp-block-button__link,
input[type='submit'] {
	color: <?php echo thesod_get_option('button_text_basic_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('button_text_hover_color')) : ?>
body .wp-block-button .wp-block-button__link:hover,
input[type='submit']:hover {
	color: <?php echo thesod_get_option('button_text_hover_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('button_background_basic_color')) : ?>
body .wp-block-button .wp-block-button__link,
input[type='submit'] {
	background-color: <?php echo thesod_get_option('button_background_basic_color'); ?>;
}
<?php endif; ?>

<?php if(thesod_get_option('button_background_hover_color')) : ?>
body .wp-block-button .wp-block-button__link:hover,
input[type='submit']:hover {
	background-color: <?php echo thesod_get_option('button_background_hover_color'); ?>;
}
<?php endif; ?>