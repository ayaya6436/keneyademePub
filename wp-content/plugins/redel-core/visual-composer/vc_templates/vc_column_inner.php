<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * VictorThemes Changes are mentioned by : Custom Changes.
 * Only overlay dotted div and class added in this custom changes.
 */

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column_Inner
 */
$el_class = $width = $css = $offset = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

// Custom Changes
if ($text_alignment) {
	$text_alignment = $text_alignment;
} else {
	$text_alignment = 'text-left';
}
// Custom Changes
if ($animation_style) {
	$horizon = 'horizon';
} else {
	$horizon = '';
}

$css_classes = array(
	$this->getExtraClass( $el_class ),
	'wpb_column',
	'vc_column_container',
	$text_alignment, // Custom Changes
	$horizon, // Custom Changes
	$width,
);

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) ) {
	$css_classes[] = 'vc_col-has-fill';
}

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

// Custom Changes
if ($animate_duration) {
	$animate_duration = 'duration:'. $animate_duration .';';
} else {
	$animate_duration = 'duration:800ms;';
}
// Custom Changes
if ($animate_delay) {
	$animate_delay = 'delay:'. $animate_delay .';';
} else {
	$animate_delay = '';
}
// Custom Changes
if ($animation_style) {
	$animation_style = 'preset:'. $animation_style .';';
	$animate_atts = ' data-animate-in="'. $animation_style . $animate_duration . $animate_delay .'"';
} else {
	$animation_style = '';
	$animate_atts = '';
}

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . $animate_atts .'>'; // Custom Changes
$output .= '<div class="vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) . '">';
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo $output;
