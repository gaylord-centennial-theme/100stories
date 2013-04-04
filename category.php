<?php
/**
 * This template, category.php, is the category template file.
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */

get_header(); ?>
<script type="text/javascript">
  	$(document).ready(function(){
			var viewportWidth=jQuery(window).width();
			if (viewportWidth < 960){$("#menu-centennial-menu").hide();}
			$(".menu-toggle").css("cursor","pointer");			
	//		$("#menu-centennial-menu").show();
			$(".menu-toggle").click(function(){
					$("#menu-centennial-menu").slideToggle();
			});
		});
</script>
	<h3 id="category-title">
		<?php single_cat_title(); ?> 
	</h3>
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
