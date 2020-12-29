<?
  /**
   * Default Wordpress loop
   *
   * @return  void
   */
  function wp_default_loop() {
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
      the_title();
      the_content();
    endwhile; endif;
    get_sidebar();
    get_footer();
  }

  /**
   * Fix lists for screen-readers in Safari/Webkit for `ul { list-style: none; }`
   * 
   * @author Michael Gale <michael@michaelgale.dev> | 29.12.2020
   * @link https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html
   * 
   * @param   String  $block_content  Content of all Gutenberg blocks
   * @param   Array   $block          Attributes of all Gutenberg blocks
   *
   * @return  String  modified gallery blocks
   */
  function mg_a11y_gallery_block( $block_content, $block ) {

    // 1. Only modify only `core/gallery` blocks
    if ( 'core/gallery' !== $block['blockName'] ) {
      return $block_content;
    }

    // 2. Add aria role to `<ul>`'s
    $p = '<ul class="blocks-gallery-grid">';
    $r = 'ul role="list" class="blocks-gallery-grid"';
    $block_content = preg_replace($p, $r, $block_content, -1);

    // 3. Add aria role to `<li>`'s
    $p = '<li class="blocks-gallery-item">';
    $r = 'li role="listitem" class="blocks-gallery-item"';
    $block_content = preg_replace($p, $r, $block_content, -1);
   
    return $block_content;
    
  }
  add_filter( 'render_block', 'mg_a11y_gallery_block', 10, 2 );