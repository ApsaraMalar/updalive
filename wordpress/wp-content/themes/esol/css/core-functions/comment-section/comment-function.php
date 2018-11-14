<?php
// code for comment
if ( ! function_exists( 'esol_comment' ) ) :
function esol_comment( $esol_comment, $args, $depth ) 
{
	$GLOBALS['comments'] = $esol_comment;
	//get theme data
	global $comment_data;

	//translations
	$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : 
	__('Reply','esol');?>
		
		<div class="media comment-col" data-aos="fade-left" data-aos-duration="1200">
			<a href="#" class="pull-left-comment">
				  <?php echo get_avatar($esol_comment,$size = '60'); ?>
			</a>
			<div class="media-body">
				<div class="comment-detail">
					<h4 class="comment-detail-title"><?php the_author();?><span class="comment-date"><?php esc_html_e('Posted on :','esol');?>&nbsp;<?php comment_date('F j, Y');?>&nbsp;<?php esc_html_e('at','esol');?>&nbsp;<?php comment_time('g:i a'); ?></span></h4>
					<p><?php comment_text() ;?></p>
					<div class="reply"><a href="#"><i class="fa fa-reply"></i><?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></div>
				</div>	
			</div>
		</div>			
<?php
}
endif;
add_filter('get_avatar','esol_add_gravatar_class');
function esol_add_gravatar_class($esol_class) {
    $esol_class = str_replace("class='avatar", "class='uthor-image", $esol_class);
    return $esol_class;
}
?>