<?php
/**
 * This template, index.php, is the main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display posts when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */

get_header(); ?>
	<div id="single-primary" class="site-content">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title">
                                    <!--<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hundredstories' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>-->
                            </h1>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hundredstories' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
                        </div><!-- .entry-content -->
                    </article><!-- #post -->
				<?php endwhile; ?>
				<?php hundredstories_content_nav(); ?>
            <?php else : ?>
				
			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
