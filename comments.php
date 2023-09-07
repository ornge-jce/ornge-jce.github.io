<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oblo
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- Comments -->
<div id="comments" class="section__comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		
		<div class="m-titles">
			<div class="m-title align-left">
				<?php comments_number( esc_html__( 'No comments found', 'oblo' ), esc_html__( '1 Comment', 'oblo' ), esc_html__( '% Comments', 'oblo' ) ); ?>
			</div>
		</div>

		<ul class="comments">
			<?php
			wp_list_comments( array(
				'style'	  => 'ul',
				'avatar_size' => '80',
				'callback' => 'oblo_comment'
			) );
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation( array(
			'screen_reader_text' => ' ',
			'prev_text' => esc_html__( 'Older comments', 'oblo' ),
			'next_text' => esc_html__( 'Newer comments', 'oblo' )
		) );

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'oblo' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	
	<div class="form-comment">
		<?php
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
		
			$comment_args = array(
				'title_reply' => esc_html__( 'Leave a comment', 'oblo' ),
				'title_reply_to' => esc_html__( 'Leave a comment to %s', 'oblo' ),
				'cancel_reply_link' => esc_html__( 'Cancel Reply', 'oblo' ),
				'title_reply_before' => '<div class="m-titles"><div class="m-title align-left">',
				'title_reply_after' => '</div></div>',
				'label_submit' => esc_html__( 'Submit', 'oblo' ),
				'comment_field' => '<div class="group-row"><div class="group"><textarea class="textarea" rows="3" placeholder="' . esc_attr__( 'Comment', 'oblo' ).'" id="comment" name="comment" aria-required="true" ></textarea></div></div>',
				'must_log_in' => '<p class="must-log-in">' . esc_html__( 'You must be ', 'oblo' ) . '<a href="' . esc_url( wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '">' . esc_html__( 'logged in', 'oblo' ) . '</a>' . esc_html__( ' to post a comment.', 'oblo' ) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' . esc_html__( 'Logged in as ', 'oblo' ) . '<a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . esc_html( $user_identity ) . '</a>' . esc_html__( '. ', 'oblo' ) . '<a href="' . esc_url( wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '" title="' . esc_attr__( 'Log out of this account', 'oblo' ) . '">' . esc_html__( 'Log out?', 'oblo' ) . '</a></p>',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'fields' => apply_filters( 'comment_form_default_fields', array(
					'author' => '<div class="group-row"><div class="group"><input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'oblo' ) . '" class="input" value="" ' . $aria_req . ' /></div>',
					'email' => '<div class="group"><input id="email" name="email" type="text" placeholder="' . esc_attr__( 'Email', 'oblo' ) . '" class="input" value="" ' . $aria_req . ' /></div></div>',
				)),
				'class_submit' => 'btn',
				'submit_field' => ' <div class="group-row"><div class="group">%1$s %2$s</div></div>',
				'submit_button' => '<button type="submit" name="%1$s" id="%2$s" class="%3$s">%4$s</button>'
			);

			comment_form( $comment_args );
		?>
	</div>

</div><!-- #comments -->
