<?php 
global $eo_options;
// Move footer outside #wrap if sticky footer is enabled
if( $eo_options["sticky_footer"] == "1" ) echo "</div></div>";
?>

                <footer role="contentinfo" id="footer">
					<div class="countdown">
						<div id="inner-footer" class="container">
						  <hr />
						  <input type="hidden" id="countdown_date" value="<?php echo COUNTDOWNDATE; ?>" />
						  <div class="countdown-main-container">
							<h4>El <strong>Hackatón Cívico Guatemala</strong> comienza en:</h4>
							<div class="event-countdown"></div>
						  </div>					  
						  <div id="widget-footer" class="clearfix row">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
							<?php endif; ?>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
							<?php endif; ?>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
							<?php endif; ?>
						  </div>
						
						</div> <!-- end #inner-footer -->
					</div>
                    <div class="sponsors">
						<div class="container">
							<a class="footer-logo" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/rsc/img/logo.png" height="100px"></a>
							<p>Es apoyado por estas iniciativas:</p>
						</div>
					</div>	
					<div class="bottom">
						<div class="container">
							<nav class="clearfix">
								<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
							</nav>
							
							<p class="pull-right<?php if ($eo_options["foot_linkback"]) echo ' authl'?>" id="copyright_foot">
							<?php  if ($eo_options["foot_copy_right"]) 	echo $eo_options["foot_copy_right"];
							if ($eo_options["foot_linkback"]) {
							?>
							
							<a href="http://eodepo.com/bootstrap-ultimate" title="Bootstrap 3 theme for Wordpress" target="_blank"> Bootstrap UL</a>
							</p><?php } // foot_linkback?>
					
							<p class="attribution">&copy; <?php echo date('Y'); ?>
							<?php if ($eo_options["foot_copy_left"]) {
								echo $eo_options["foot_copy_left"];
							} else {
							 bloginfo('name');
							}
							 ?>
							</p>
						</div>
					</div>
                </footer> <!-- end footer -->
            
			<?php if(  $eo_options["sticky_footer"] != "1" ) { ?>  </div> <!-- end #maincnot .container --><?php  } ?> 
                    
            <!--[if lt IE 7 ]>
                <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
                <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
            <![endif]-->
       <?php wp_footer(); // js scripts are inserted using this function ?>
	</body>
</html>