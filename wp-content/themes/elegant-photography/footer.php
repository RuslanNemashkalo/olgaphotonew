<!-- start footer -->
    <div id="footer">
    	<?php if ( get_option( 'photography_footertext' ) <> "" ) { echo get_option( 'photography_footertext' ); } else { ?><?php _e('You can enter some custom text here from the theme options at the dashboard.'); ?><?php } ?>
    </div>
    <!-- end footer -->
</div>
<!-- end box -->

<!-- end footer -->
<?php wp_footer(); ?>
<?php if ( get_option('photography_google_analytics') <> "" ) { echo stripslashes(get_option('photography_google_analytics')); } ?>
</body>
</html>