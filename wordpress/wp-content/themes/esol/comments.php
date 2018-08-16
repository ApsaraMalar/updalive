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

<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>

