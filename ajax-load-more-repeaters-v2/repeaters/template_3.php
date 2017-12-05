<!-- wpis -->
<?php

?>
<div class="item large-6 medium-6 small-12 columns">
	<?php if(has_post_thumbnail()):
	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), "blog");
	?>
	<div class="entrycover" style="background-image:url(<?php echo $thumb[0];?>);">
		<a href="<?php the_permalink();?>"></a>
	</div>
	<?php endif;?>
	<div class="panel">
		<p><small><?php the_time('d.m.Y');?></small></p>
		<h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
		<?php 	global $more;    
				$more = 0; 
				the_content('');?>
		<p><a href="<?php the_permalink();?>" class="light"><strong>czytaj dalej »</strong></a></p>
		<p class="tags">
			<?php the_tags('','','');?>
		</p>
	</div>
</div>
<!-- END wpis -->