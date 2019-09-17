<?php
/**
 * The template for displaying advertising landing pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elms_College_Redesign
 */


$bannerImage = get_field("advertising_banner_image");
//$size = "full";

if(get_field("advertising_right_column_header") ){
	$rightHeader = get_field("advertising_right_column_header");
}
if(get_field("advertising_right_column_text") ){
	$rightText = get_field("advertising_right_column_text");
}

//$formCode = get_field("advertising_ninja_form_shortcode");

get_header("advertising");
?>

<div class="section-heading">
	<?php
		echo wp_get_attachment_image( $bannerImage, "full" );
	?>
</div>

<div id="primary" class="content-area pure-g">
	<main id="main" class="site-main pure-u-1 standalone" role="main">

		<div class="flexRowWrapStart spaceBetween">
			<div class="flex-column">				
				<?php the_content(); ?>
			</div>

				<div id="get-started" class="flex-column">
					<!-- right side text box and form  -->
					<h2><?php echo $rightHeader; ?></h2>
					<?php the_field("advertising_right_column_text"); ?>

					<?php if( get_field("advertising_application_link_url") ): ?>
						<div class="buttons blue">
							<a href="<?php the_field('advertising_application_link_url'); ?>" target="_blank" rel="noopener"><?php the_field('advertising_application_link_text'); ?></a>
						</div>
					<?php endif; ?>
					<span class="collapseomatic" title="Get Info" id="form" >Get Info</span>
					<span id="swap-form" style="display: none;">Close form</span>
					<div id="target-form" class="collapseomatic_content">
						<?php get_template_part("template-parts/ellucian-modal"); ?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->    
</div><!-- #primary -->
<hr />
<?php
get_footer("advertising");
