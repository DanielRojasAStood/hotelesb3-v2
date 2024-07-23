<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}?>

   <footer>
      <?php get_template_part('template-parts/footer/content', 'footer') ?>
   </footer>

   <?php wp_footer(); ?>
</body>
</html>
