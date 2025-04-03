<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorilabs
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->

<script>
  // Inicializar los iconos después de que se cargue la página
  document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
  });
</script>
<?php wp_footer(); ?>

</body>
</html>
