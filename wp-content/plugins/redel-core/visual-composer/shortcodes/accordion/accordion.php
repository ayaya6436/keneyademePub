<?php
/* ==========================================================
  Accordion
=========================================================== */
if( ! function_exists( 'redl_vt_accordion_function' ) ) {
  function redl_vt_accordion_function( $atts, $content = '', $key = '' ) {

    global $vt_accordion_tabs;
    $vt_accordion_tabs = array();

    extract( shortcode_atts( array(
      'accordion_style' => '',
      'id'            => '',
      'class'         => '',
      'one_active'    => '',
      'icon_color'    => '',
      'border_color'  => '',
      'active_tab'    => 0,
    ), $atts ) );

    do_shortcode( $content );

    // is not empty clients
    if( empty( $vt_accordion_tabs ) ) { return; }

    $id          = ( $id ) ? ' id="'. $id .'"' : '';
    $class       = ( $class ) ? ' '. $class : '';
    $one_active  = ( $one_active ) ? ' collapse-others' : '';
    $uniqtab     = uniqid();

    // Style
    if ($accordion_style === 'style-two') {
      $accordion_class = ' evlt-panel-two';
    } elseif($accordion_style === 'style-three') {
      $accordion_class = ' evlt-panel-three';
    } else {
      $accordion_class = ' evlt-panel-one';
    }

    $el_style    = ( $border_color ) ? ' style="border-color:'. $border_color .';"' : '';
    $icon_style  = ( $icon_color ) ? ' style="color:'. $icon_color .';"' : '';

    // begin output
    $output      = '<div id="accordion" class="accordion ' . $one_active . '" '. $id .' role="tablist" aria-multiselectable="true">';

    foreach ( $vt_accordion_tabs as $key => $tab ) {

      $opened    = ( $key == $active_tab ) ? ' show' : '';    
      $collapsed    = ( $key == $active_tab ) ? '' : 'collapsed';   
      $uniqtab     = uniqid();

      $output   .= '<div class="card panel panel-default'.$opened.'">
                      <div class="card-header" id="headingOne'. esc_attr($key.$uniqtab) .'">
                        <h4 class="accordion-title panel-title">';
                        if ($accordion_style === 'style-three') {
                          $output .='<button class="btn btn-link panel-title '.$collapsed.'" data-toggle="collapse" data-target="#blsptAcc-'. esc_attr($key.$uniqtab) .'" aria-expanded="true" aria-controls="blsptAcc-'. esc_attr($key.$uniqtab) .'">'. $icon .'<strong>'. $tab['atts']['title'] .'</strong>'. $sub_title .'
                          </button>';
                        } else {
                          $output .='<button class="btn btn-link panel-title '.$collapsed.'" data-toggle="collapse" data-target="#blsptAcc-'. esc_attr($key.$uniqtab) .'" aria-expanded="true" aria-controls="blsptAcc-'. esc_attr($key.$uniqtab) .'">'. $icon .'<span>'. $tab['atts']['title'] .'</span>'. $sub_title .'
                          </button>';
                        }
                        $output .='</h4>
                      </div>
                      <div id="blsptAcc-'. esc_attr($key.$uniqtab) .'" class="collapse '. $opened .'" data-parent="#accordion">
                        <div class="card-body panel-body panel-content">
                          '.do_shortcode($tab['content']).'
                        </div>
                      </div>
                    </div>';

    }

    $output     .= '</div>';
    // end output

    return $output;
  }
  add_shortcode( 'vc_accordion', 'redl_vt_accordion_function' );
}

/**
 *
 * Accordion Shortcode
 * @since 1.0.0
 * @version 1.1.0
 *
 */
if( ! function_exists( 'redl_vt_accordion_tab' ) ) {
  function redl_vt_accordion_tab( $atts, $content = '', $key = '' ) {
    global $vt_accordion_tabs;
    $vt_accordion_tabs[]  = array( 'atts' => $atts, 'content' => $content );
    return;
  }
  add_shortcode( 'vc_accordion_tab', 'redl_vt_accordion_tab' );
}
