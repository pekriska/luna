<?php
/**
 * Shortcodes
 *
 * 
 *
 * @package drossel-luna
 */

/*
==================================================
CONTACT FORM
Format: [contact_form]
==================================================
 */
function drossel_contact_form( $atts, $content = null ) {
	
	//[contact_form]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/contact-form.php';
	return ob_get_clean();
	
}
add_shortcode( 'contact_form', 'drossel_contact_form' );


/*
==================================================
SLIDERS
Format: [productsslider id="slider id"]
==================================================
 */
function drossel_sliders($atts, $content = null)
{
    //get the attributes
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'drossel_sliders'
    );

    //return HTML
    ob_start();
    // include 'templates/newsletter.php';

    $meta_keys = array('first_image', 'second_image', 'third_image', 'fourth_image', 'fifth_image');

    $cesta = get_template_directory_uri();
    $cesta .= '/js/simple-slider.js';

    $cesta_css = get_template_directory_uri();
    $cesta_css .= '/css/simple-slider.css';
    $css = file_get_contents($cesta_css);
    ?>

	<script type="text/javascript" src="<?php echo $cesta ?>">
	</script>

	<style>
	<?php
		echo $css;
    ?>
	</style>

	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

	<?php
	$j = 0;
    $i = get_post_meta($atts['id'], 'number_of_img', true);
    foreach ($meta_keys as $meta_key) {?>
	<?php if ($j >= $i) {
        continue;
    }
        ?>
	<div>
	<a href="<?php echo get_post_meta($atts['id'], $meta_key.'_link', true); ?>">
		<img data-u="image" src="<?php echo wp_get_attachment_image_src(get_post_meta($atts['id'], $meta_key, true), 'full')[0]; ?>" />
	</a>
	</div>
	<?php
	$j++;
    }?>

	</div>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	<div data-u="prototype" class="i" style="width:16px;height:16px;">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	<circle class="b" cx="8000" cy="8000" r="5800"></circle>
	</svg>
	</div>
	</div>
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
	</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
	</svg>
	</div>
	</div>
	<script type="text/javascript">jssor_1_slider_init();</script>
	<!-- #endregion Jssor Slider End -->
	<?php

    return ob_get_clean();
}
add_shortcode('slider', 'drossel_sliders');
// --------------- Sliders-----------------