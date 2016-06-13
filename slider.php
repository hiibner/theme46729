<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery("#showcase").fadeTo(500, 1);
		
		jQuery("#showcase").awShowcase({
			content_width:			1170,
			content_height:			535,
			fit_to_parent:			false,
			auto:					true,
			interval: 5000,
			continuous:				true,
			loading:				true,
			arrows:					false,
			buttons:				true,
			btn_numbers:			true,
			keybord_keys:			true,
			mousetrace:				false, /* Trace x and y coordinates for the mouse */
			pauseonover:			true,
			stoponclick:			true,
			transition: 'hslide', /* hslide/vslide/fade */
			transition_delay: 300,
			transition_speed: 500,
			show_caption:			'show', /* onload/onhover/show */
			thumbnails:				true,
			thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
			thumbnails_direction:	'horizontal', /* vertical/horizontal */
			thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
			dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
			speed_change:			false, /* Set to true to prevent users from swithing more then one slide at once. */
			viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		});
	});
</script>


<div id="showcase-holder">
  <div id="showcase" class="showcase">
  	
	  <?php
	    query_posts("post_type=slider&posts_per_page=-1&post_status=publish");
	    while ( have_posts() ) : the_post();
	  ?>
	  <?php
	    $custom = get_post_custom($post->ID);
			$url = get_post_custom_values("slider-url");
	    $sl_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-post-thumbnail');
	  ?>
	  <?php if(has_post_thumbnail($the_ID)){ ?>
    <div class="showcase-slide">
    	<div class="showcase-content">
      <?php if($url!=""){ ?>
      	<?php if(has_post_thumbnail()) { ?>
				<a href="<?php echo $url[0] ?>"><?php echo the_post_thumbnail('slider-post-thumbnail'); ?></a>
				<?php } ?>
      <?php } else { ?>
      	<?php if(has_post_thumbnail()) {
				echo the_post_thumbnail('slider-post-thumbnail');
				} ?>
      <?php } ?>
	    </div>
	    <div class="showcase-thumbnail">
	      <div class="showcase-thumbnail-caption">
        	<h4><?php the_title(); ?></h4>
        </div>
	    </div>
    </div>
		<?php } ?>
	  <?php endwhile; ?>
	  <?php wp_reset_query();?>
  </div>
</div>
<?php wp_reset_query();?>