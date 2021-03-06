<?php
//call via:
//get_template_part("template-parts/page-heading");

if( get_field('header_background_image') ){
	echo '<div id="imageHeading" class="section-heading usingSmartCrop">';
	echo wp_get_attachment_image( get_field('header_background_image'), 'full', "", array( "role" => "presentation", "alt" => "" ) );
}else{
	echo '<div id="textHeading" class="section-heading greenBGwhiteText">';
}?>
	<h1 class="field-title trace">
		<?php 
			echo esc_html( get_the_title() );
		?>
	</h1>
	<?php 
	  if( function_exists("pll_the_languages")){
		echo '<ul class="languageSwitcher is-style-none" style="align-self:end;margin-bottom:0px;margin-left:5px;text-align:center;color:white;">';
	  	pll_the_languages( array( 'show_flags' => 1,'hide_current' => 1,'hide_if_no_translation' => 1) );
	  	echo '</ul>';
	  }
	?>
</div>