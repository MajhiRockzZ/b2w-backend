<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVASCRIPT
       Placed at the end of the document so the pages load faster!
  ===================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- TypeKit Fonts -->
<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">
    try {
        Typekit.load();
    } catch (e) {
    }
</script>

</body>
</html>
