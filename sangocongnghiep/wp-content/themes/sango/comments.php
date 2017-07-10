<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sango
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

<div id="comments" class="comments-area pav-comment">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comment_count = get_comments_number();
				if ( 1 === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html_e( '1 comment trên &ldquo;%1$s&rdquo;', 'sango' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s comment trên &ldquo;%2$s&rdquo;', '%1$s comment trên &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'sango' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
			?>
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'sango' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'sango' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'sango' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'sango' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'sango' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'sango' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sango' ); ?></p>
	<?php
	endif;
	$args = array(
			'fields' => apply_filters(
				'comment_form_default_fields', array(
					'author' =>'<div class="form-group required">
						<label class="col-sm-2 control-label" for="comment-user">Full Name</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="author" value="'.esc_attr( $commenter['comment_author'] ).'" id="comment-user">
						</div>
					</div>',
					'email'  => '<div class="form-group required">
						<label class="col-sm-2 control-label" for="comment-email">Email</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="email" value="'.esc_attr(  $commenter['comment_author_email'] ).'" id="comment-email">
						</div>
					</div>'
				)
			),
			'comment_field' => '<div class="form-group required">
				<label class="col-sm-2 control-label" for="comment">' . __( 'Comment:' ) . '</label>
				<div class="col-sm-8">
					<textarea class="form-control" name="comment" id="comment"></textarea>
				</div>
			</div>',
		    'comment_notes_after' => '',
		    'title_reply' => '<h4>Leave A Comment:</h4>',
		    'class_form'=>'form-horizontal',
		    'comment_notes_before'=> '<fieldset>',
		    'comment_notes_after'=>'</fieldset>',
		    'class_submit'=> 'btn btn-default'
		);
	comment_form($args);
	?>
</div><!-- #comments -->
