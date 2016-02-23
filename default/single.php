<?php get_header(); ?>

	<div id="content">
		<?php while ( wptouch_have_posts() ) { ?>

			<?php wptouch_the_post(); ?>

			<div class="<?php wptouch_post_classes(); ?>">
				<div class="post-page-head-area bauhaus">
					<span class="post-date-comments">
						<?php if ( bauhaus_should_show_date() ) { ?>
							<?php wptouch_the_time(); ?>
						<?php } ?>
						<?php if ( bauhaus_should_show_comment_bubbles() ) { ?>
							<?php if ( bauhaus_should_show_date() && ( comments_open() || wptouch_have_comments() ) ) echo '&harr;'; ?>
							<?php if ( comments_open() || wptouch_have_comments() ) comments_number( __( 'no comments', 'wptouch-pro' ), __( '1 comment', 'wptouch-pro' ), __( '% comments', 'wptouch-pro' ) ); ?>
						<?php } ?>
						<?php single_views(get_the_ID()); ?>
					</span>
					<h2 class="post-title heading-font">
						<?php
						$custom = get_post_custom(get_the_ID());
						$custom_value = $custom['is_copy'];
						if($custom_value[0]){

							echo "<span class='is_page_copy'>转</span>";
						}else{
							echo "<span class='is_page_mine'>原</span>";
						}
						?>
						<?php wptouch_the_title(); ?></h2>
					<?php if ( bauhaus_should_show_author() ) { ?>
						<span class="post-author"><?php the_author(); ?></span>
					<?php } ?>
				</div>

				<div class="post-page-content">
					<?php if ( bauhaus_should_show_thumbnail() && wptouch_has_post_thumbnail() ) { ?>
						<div class="post-page-thumbnail">
							<?php the_post_thumbnail('large', array( 'class' => 'post-thumbnail wp-post-image' ) ); ?>
						</div>
					<?php } ?>
					<?php /*重定向以前使用*/ ?>
					<?php /*wptouch_the_content();*/ ?>
					<?php get_wptouch_the_content(); ?>
					<?php if ( bauhaus_should_show_taxonomy() ) { ?>
						<?php if ( wptouch_has_categories() || wptouch_has_tags() ) { ?>
							<div class="cat-tags">
								<?php if ( wptouch_has_categories() ) { ?>
									<?php _e( 'Categories', 'wptouch-pro' ); ?>: <?php wptouch_the_categories(); ?><br />
								<?php } ?>
								<?php if ( wptouch_has_tags() ) { ?>
									<?php _e( 'Tags', 'wptouch-pro' ); ?>: <?php wptouch_the_tags(); ?>
								<?php } ?>
							</div>
						<?php } ?>

						<?php if ( wptouch_has_tags() ) { ?>
						<?php } ?>
					<?php } ?>
				</div>
			</div>

		<?php } ?>
	</div> <!-- content -->

	<?php do_action( 'wptouch_after_post_content' ); ?>

	<?php get_template_part( 'nav-bar' ); ?>
	<?php if ( comments_open() || wptouch_have_comments() ) { ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php } ?>

<?php get_footer(); ?>