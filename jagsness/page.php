<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Glass_Cage
 */

get_header();
?>

<div class="" id="page-<?php echo sanitize_title_with_dashes(get_the_title()); ?>">
	<div class="container">
		<h4 style="text-align:center">
            <?php echo get_the_title() ?>
        </h4>
        <?php the_content(); ?>
	</div>
</div>

<?php
get_footer();