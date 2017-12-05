<?php 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), "avatar");
$link = get_field('link');
				?>
				<div class="large-4 medium-12 small-12 columns item">
					<div class="opinia">
						<?php the_content();?>
					</div>
					<div class="row">
						<div class="large-3 medium-2 small-2 columns">
							<img class="avatar" src="<?php echo $thumb[0];?>">
						</div>
						<div class="large-9 medium-10 small-10 columns">
							<h6 class="white">
                        	<?php if($link!=''):?>
								<a href="<?php echo $link;?>" target="about:blank">
							<?php endif;?>
								<?php the_title();?>
							<?php if($link!=''):?>
								</a>
							<?php endif;?>
                        	</h6>
							<p><span class="light"><?php echo get_field('dodatkowe_info');?></span></p>
						</div>
					</div>
				</div>