<?php
/**
 * This template, content.php, is the default template for displaying content. It is is used for both single and index/archive/search
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
    <header class="entry-header">
		<?php if ( is_single() ) : ?>
        <!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
		<?php else : ?>
        <h1 class="entry-title">
				<!--<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hundredstories' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>-->
        </h1>
        <?php endif; // is_single() ?>
		<?php if ( comments_open() ) : ?>
        
        <?php endif; // comments_open() ?>
    </header><!-- .entry-header -->
	<div class="entry-content">
    		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'hundredstories' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
    </div><!-- .entry-content -->
	
</article><!-- #post -->
