<?php
/**
 * Template Name: 1-2, no left rail
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elms_College_Redesign
 */

wp_enqueue_style( '1-2-no-left-rail-page', get_template_directory_uri() . '/css/1-2-no-left-rail-page.css', array(), '1' );

$permalink = get_permalink();
if(strpos($permalink,'nursing')){
	get_header("nursing");
} else{
	get_header();
}
the_post();
?>

<div id="pageHeading" class="section-heading">
	<h1 class="field-title">
		<?php 
			if (get_the_title()) { the_title(); }
		?>
	</h1>
</div>
<div id="primary" class="content-area pure-g">

	<main id="main" class="site-main pure-u-1 standalone" role="main">

		<div class="field-content flexRowWrapStart spaceBetween">
			<?php if( get_field('commencement_year') ){
				echo '<h2>Class of ' .get_field('commencement_year') . ': where are you going?';
			} ?>
			<div class="fullWidth">
				<?php the_content() ?>
				<?php if( get_field('commencement_youtube_link') ){
					the_field('commencement_youtube_link');
				} else {
					the_field('commencement_week_schedule');
				}?>
			</div>
			<?php if( have_rows('where_are_they_going_container') ): 
				while( have_rows('where_are_they_going_container') ): the_row(); 
			?>
				<div id="students" class="fullWidth">
					
					<h2>Class of </h2>
					<?php if( get_sub_field('class_youtube_video-top') ){
						the_sub_field('class_youtube_video-top');
					} ?>
					<ul class="template embedDirectory-image ulreset">
						<?php
						if ( have_rows( "where_are_they_going" ) ):
							while ( have_rows( "where_are_they_going" ) ): the_row();
						$image = get_sub_field( "graduate_image" );
						$size = "thumbnail";

						echo "<li class='spaceAround'><div class='listText'><strong>";
						the_sub_field( "bolded_text" );
						echo "</strong><br />";
						if ( get_sub_field( "plain_text" ) ) {
							the_sub_field( "plain_text" );
							echo "<br />";
						};
						if ( get_sub_field( "italicized_text" ) ) {
							echo "<em>";
							the_sub_field( "italicized_text" );
							echo "</em>";
						};
						echo '<p>' .get_sub_field("quote_or_descriptive_text") . '</p>';
						echo "</div>";
						echo wp_get_attachment_image( $image, $size );
						echo "</li>";

						endwhile;
						endif;
						?>
					</ul>
					<?php if( get_sub_field('class_youtube_video-bottom') ){
						the_sub_field('class_youtube_video-bottom');
					} ?>
				</div>
			<?php endwhile; endif; ?>
			<div id="speaker" class="flexHalf">
				<h4 class="centerText">Commencement Speaker</h4>
				<?php if( get_field('commencement_speaker_bio') ){
					the_field('commencement_speaker_bio');
				}?>
			</div>
			<div id="demographics" class="flexHalf">
				<?php if( get_field('class_demographics') ){
					the_field('class_demographics');
				}?>
			</div>
		</div>

	</main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();