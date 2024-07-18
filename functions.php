<?php
/**
 * Functions
 *
 * @package WordPress
 */

/**
 * GENERAL SETTINGS
 * ***************************************************************************************************
 */
add_action(
	'after_setup_theme',
	function() {
		load_theme_textdomain( 'wp', get_template_directory() . '/languages' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'rest_output_link_wp_head' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		remove_action( 'wp_head', 'wp_resource_hints', 2 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'style', 'script' ) );
		register_nav_menu( 'header', 'Header' );
		register_nav_menu( 'footer1', 'Footer 1' );
		register_nav_menu( 'footer2', 'Footer 2' );
		register_nav_menu( 'footer3', 'Footer 3' );
	},
	11,
);

/**
 * SCRIPTS & STYLES
 * ***************************************************************************************************
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_deregister_style( 'global-styles' );
		wp_deregister_style( 'classic-theme-styles' );
		wp_deregister_style( 'wp-block-library' );
		wp_enqueue_style( 'bundle', get_theme_file_uri( 'bundle.css' ), array(), '1.0.0' );
		wp_enqueue_script( 'bundle', get_theme_file_uri( 'bundle.js' ), array(), '1.0.0', true );
	},
);

/**
 * FILTERS
 * ***************************************************************************************************
 */
add_filter( 'show_admin_bar', '__return_false' );
add_filter( 'use_block_editor_for_post', '__return_false' );

/**
 * AJAX
 * ***************************************************************************************************
 */
function contact_form() {
	$fullname = sanitize_text_field( wp_unslash( isset( $_POST['fullname'] ) ? $_POST['fullname'] : '' ) );
	$email    = sanitize_email( wp_unslash( isset( $_POST['email'] ) ? $_POST['email'] : '' ) );
	$phone    = sanitize_text_field( wp_unslash( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ) );
	$comment  = sanitize_textarea_field( wp_unslash( isset( $_POST['comment'] ) ? $_POST['comment'] : '' ) );
	$message  = '';
	$message .= $fullname ? '<p><strong>Nombre:</strong> ' . $fullname . '</p>' : '';
	$message .= $email ? '<p><strong>Correo electrónico:</strong> ' . $email . '</p>' : '';
	$message .= $phone ? '<p><strong>Teléfono:</strong> ' . $phone . '</p>' : '';
	$message .= $comment ? '<p><strong>Mensaje:</strong> ' . $comment . '</p>' : '';
	$headers  = array( 'Content-Type: text/html; charset=UTF-8', 'From: Orobianco <noreplay@orobianco.es>' );
	$send = wp_mail( get_bloginfo( 'admin_email' ), 'Nuevo mensaje de formulario', $message, $headers, $attachments );
	if ( $send ) {
		wp_send_json_success( array( 'message' => __( 'El formulario se ha enviado correctamente.', 'wp' ) ) );
	}
	wp_send_json_error( array( 'message' => __( 'Algo salió mal, por favor intenta de nuevo.', 'wp' ) ) );
}
add_action( 'wp_ajax_nopriv_contact_form', 'contact_form' );
add_action( 'wp_ajax_contact_form', 'contact_form' );

function work_form() {
	$attachments = array();
	$type_job   = sanitize_text_field( wp_unslash( isset( $_POST['type_job'] ) ? $_POST['type_job'] : '' ) );
	$workplace  = sanitize_text_field( wp_unslash( isset( $_POST['workplace'] ) ? $_POST['workplace'] : '' ) );
	$job        = sanitize_text_field( wp_unslash( isset( $_POST['job'] ) ? $_POST['job'] : '' ) );
	$fullname   = sanitize_text_field( wp_unslash( isset( $_POST['fullname'] ) ? $_POST['fullname'] : '' ) );
	$email      = sanitize_email( wp_unslash( isset( $_POST['email'] ) ? $_POST['email'] : '' ) );
	$phone      = sanitize_text_field( wp_unslash( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ) );
	$comment    = sanitize_textarea_field( wp_unslash( isset( $_POST['comment'] ) ? $_POST['comment'] : '' ) );
	$curriculum = $_FILES['curriculum'];
	if ( $curriculum['size'] > 0 ) {
		$movefile  = wp_handle_upload( $curriculum, array( 'test_form' => false ) );
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$attachments[] = $movefile['file'];
		} else {
			wp_send_json_error( array( 'message' => $movefile['error'] ) );
		}
	}
	$message  = '';
	$message .= $type_job ? '<p><strong>Tipo de trabajo:</strong> ' . $type_job . '</p>' : '';
	$message .= $workplace ? '<p><strong>Centro de trabajo:</strong> ' . $workplace . '</p>' : '';
	$message .= $job ? '<p><strong>Puesto de trabajo:</strong> ' . $job . '</p>' : '';
	$message .= $fullname ? '<p><strong>Nombre:</strong> ' . $fullname . '</p>' : '';
	$message .= $email ? '<p><strong>Correo electrónico:</strong> ' . $email . '</p>' : '';
	$message .= $phone ? '<p><strong>Teléfono:</strong> ' . $phone . '</p>' : '';
	$message .= $comment ? '<p><strong>Mensaje:</strong> ' . $comment . '</p>' : '';
	$headers  = array( 'Content-Type: text/html; charset=UTF-8', 'From: Orobianco <noreplay@orobianco.es>' );
	$send     = wp_mail( get_bloginfo( 'admin_email' ), 'Nueva solicitud de trabajo', $message, $headers, $attachments );
	foreach ( $attachments as $attachment ) {
		unlink( $attachment );
	}
	if ( $send ) {
		wp_send_json_success( array( 'message' => __( 'El formulario se ha enviado correctamente.', 'wp' ), $attachments ) );
	}
	wp_send_json_error( array( 'message' => __( 'Algo salió mal, por favor intenta de nuevo.', 'wp' ) ) );
}
add_action( 'wp_ajax_nopriv_work_form', 'work_form' );
add_action( 'wp_ajax_work_form', 'work_form' );


class Walker_Nav_Menu_Custom extends Walker_Nav_Menu {
  private $current_item = 0;

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $this->current_item++;
    $delay = $this->current_item * 150;

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item transition transform opacity-0 translate-y-12 duration-very-slow transition-all';
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';
    $data_delay = ' data-delay="' . esc_attr( $delay ) . '"';

    $output .= '<li' . $class_names . $data_delay .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}