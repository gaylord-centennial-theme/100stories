<?php
/**
 * This template, single.php, displays all single posts
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */

get_header(); ?>
<script type="text/javascript">
	$(document).ready(function(){
			$("#menu-centennial-menu").hide();
			$(".menu-toggle").css("cursor","pointer");			
	//		$("#menu-centennial-menu").show();
			$(".menu-toggle").click(function(){
					$("#menu-centennial-menu").slideToggle();
			});
					
		});
</script>
  	<div id="primary" class="site-content">
			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="single">
	
    <header class="entry-header">
		<?php if ( is_single() ) : ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
        <h1 class="entry-title">
				<!--<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hundredstories' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>-->s
        </h1>
        <?php endif; // is_single() ?>
		<?php if ( comments_open() ) : ?>
        
        <?php endif; // comments_open() ?>
    </header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_post_thumbnail('full'); ?>
        <?php the_content(); ?>
    </div><!-- .entry-content -->
	
</article><!-- #post -->
                <nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'hundredstories' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'hundredstories' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'hundredstories' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
				<?php if ( comments_open() ) {
					comments_template( '', true );
                } ?>
			<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
