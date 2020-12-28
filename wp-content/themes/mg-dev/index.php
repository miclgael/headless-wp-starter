<?
/**
 * WP HEADLESS 💕
 * Output standard WordPress loop (development)
 * Prevent public access to theme routes (production)
 */
if ( wp_get_environment_type() === 'local' ) {
  get_header();
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      the_content();
    endwhile;
  endif;
  get_sidebar();
  get_footer(); 
} else {
  header('Location: https://michaelgale.dev');
  exit();
}