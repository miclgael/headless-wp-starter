<?
/**
 * WP HEADLESS 💕
 * Output standard WordPress loop (development)
 * Prevent public access to theme routes (production)
 */

switch ( wp_get_environment_type() ) {

  case 'local':
    wp_default_loop();
  break;

  default:
    header('Location: https://michaelgale.dev');
    exit();
  break;

}