<?php
/*	@Theme Name	:	esol
* 	@file         :	comments.php
* 	@package      :	esol-lite
* 	@author       :	VibhorPurandare
* 	@license      :	license.txt
* 	@filesource   :	wp-content/themes/esol/comments.php
*/
?>
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'esol' ); ?></p>
	<?php return; endif; ?>
         <?php if ( have_comments() ) : ?>
        <div class="col-md-12">
			<div class="leave-comment" data-aos="fade-up"  data-aos-duration="1500">
				<h4 class="comment-title"><i class="fa fa-comments"></i>
					<?php echo comments_number('No Comments', '1 Comment', '% Comments'); ?></h4>
				<ol class="comments-list">
					<li>
						<ul>
							<li>
								<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
								<?php endif; ?>
								<?php wp_list_comments( array( 'callback' => 'esol_comment' ) ); ?>
							</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php esc_html_e( 'Comment navigation', 'esol' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'esol' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'esol' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : 
        //_e("Comments Are Closed!!!",'esol');
		?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php esc_html_e('You must be','esol'); ?> <a href="<?php echo esc_url(get_option('siteurl')); ?>/wp-login.php?redirect_to=<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e('logged in','esol')?></a> <?php esc_html_e('to post a comment','esol'); ?>
</p>
<?php else : ?>
	<div class="col-md-12">
			<div class="leave-comment" data-aos="fade-up"  data-aos-duration="1500">
	<?php  
	  $fields=array(
		'author' => '<div class="row">
					<div class="col-md-6">
						<input type="text" name="author" id="author" class="blog-search-field" placeholder="Your name here...">
					</div>',
		'email' => '<div class="col-md-6">
						<input type="email" class="blog-search-field" name="email" id="email" placeholder="Your email here...">
					</div></div>',
	);
		$defaults = array(
		'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'=> '<textarea id="comment" name="comment" cols="45" rows="8" placeholder="Your message here..."></textarea>',		
		'logged_in_as' => '<p class="logged-in-as">' . __( 'Logged in as','esol' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'esol').'</a>' . '</p>',
		'title_reply_to' => __( 'Leave a Reply to %s','esol'),
		'class_submit' => 'hvr-s-b main-btn',
		'id_submit'            => 'comment_btn',
		'label_submit'=>__( 'Submit Comment','esol'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h2>'.__('Leave a Reply','esol').'</h2>',		
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>						
</div>
</div>	
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>

