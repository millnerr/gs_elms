<div class="linkColumns hover">
	<?php foreach( $attributes['column'] as $inner ): ?>
	<a href="<?php echo esc_url( $inner['button-target'] ); ?>" class="column">
		<div class="column-endcap">
			<div class="permalink"><?php echo $inner['button-text']; ?></div>
		</div>
		<?php if ( isset( $inner[ 'image' ][ 'id' ] ) ) : ?>
			<div class="bgImage" style="background-image: url('<?php echo $inner['image']['url']; ?>')">
				<div class="image-tint">
					<?php if($inner['hover-text']) : ?>
						<p><?php echo $inner['hover-text']; ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</a>
  <?php endforeach; ?>
</div>
<script>
  if (window.innerWidth > 480) {
	  window.onload = setHeights;
		window.onresize = setHeights;
		function setHeights() {
		  var items = document.getElementsByClassName("column-endcap")
			var max = 0;
			var marginTop;
				
			for (var i = 0; i < items.length; i++) {
				if (items[i].offsetHeight > max)
			    max = items[i].offsetHeight;
			}
			for (var i = 0; i < items.length; i++) {
				items[i].style.height = "" + max + "px"
				marginTop = (items[i].offsetHeight - items[i].firstElementChild.offsetHeight)/2 + "px";
				items[i].firstElementChild.style.marginTop = marginTop;
			}
		}
	}
</script> 
