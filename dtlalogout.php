<?php
    if ( is_user_logged_in() ) { ?> 
    <a href="<?php echo wp_logout_url( home_url() ); ?>" rel="nofollow" style="color: #1F2937; font-family: rubik; text-align: center">
        <?php _e('Log Out'); ?>
    </a>
<?php } ?>