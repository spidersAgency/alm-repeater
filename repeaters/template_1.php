<?php
$archive_ads = get_field('archive_positioning','options');

if( array_has_field($alm_item, $archive_ads) != ''){
	$return_id = array_has_field($alm_item, $archive_ads);
	echo adrotate_group($return_id);
}
if( has_term ( 'ad' , 'type', $post->ID )){
$post_args = new ask_posts();
$post_args = $post_args->entry_ad( $post );

set_query_var ('post_args', $post_args);
get_template_part('templates/entry', 'archive-ad');
} elseif ( has_term ( 'with-button' , 'type', $post->ID ) ) {
$post_args = new ask_posts();
$post_args = $post_args->entry_button( $post );

set_query_var ('post_args', $post_args);
get_template_part('templates/entry', 'archive-post_button');
} else {
//default post
$post_args = new ask_posts();
$post_args = $post_args->entry_default( $post );

set_query_var ('post_args', $post_args);
get_template_part('templates/entry', 'archive-post');
}
?>