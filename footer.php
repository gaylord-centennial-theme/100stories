<?php
/**
 * This template, footer.php, displays footer content, i.e., colophon and widgets, and closes #main (and its child: .col-width) and #page div elements.
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */
?>
  </div><!-- #main .wrapper-->
    <footer id="colophon">
    	<?php if ( is_active_sidebar('footer-1') ||
			is_active_sidebar('footer-2') || 
			is_active_sidebar('footer-3') || 
			is_active_sidebar('footer-4') ) : ?>
	    	<div id="footer-widgets">
				<?php $i = 0; while ( $i <= 4 ) : $i++; ?>			
					<?php if ( is_active_sidebar('footer-'.$i) ) { ?>
		
				<div class="block footer-widget-<?php echo $i; ?>">
		        	<?php dynamic_sidebar('footer-'.$i); ?>    
				</div>
				        
			        <?php } ?>
				<?php endwhile; ?>
		        		        
				<div class="clear"></div>
			</div><!-- #footer-widgets  -->
	    <?php endif; ?>
	     	<div id="site-info">
				<ul>
                <li id="gaylord-logo"><a href="http://www.ou.edu/gaylord/">The University of Oklahoma | Gaylord College of Journalism and Mass Communication</a></li>
               <li>
               	<br>395 W. Lindsey, Room 3000<br>
				Norman, OK 73019<br>
				405-325-2721 | Advising 405-325-5684<br>
               </li>
                <li>&copy; Copyright <?php
                ini_set('date.timezone', 'America/Chicago');
                $startYear = 2012;
                $thisYear = date('Y');
                if ($startYear == $thisYear)
                {
                echo $startYear;
                }
                else
                {
                echo "{$startYear}-{$thisYear}";
                }
                ;
                ?></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name','display')); ?>" rel="home"><?php bloginfo('name'); ?></a> is <?php _e('proudly powered by', 'hundredstories'); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'hundredstories' ); ?>" rel="generator"><?php printf( __( 'WordPress', 'hundredstories' ) ); ?></a>
                </li>
                </ul>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
