<?php
$theme = wp_get_theme();
if ($theme->parent_theme) {
    $template_dir =  basename(get_template_directory());
    $theme = wp_get_theme($template_dir);
}
$porto_url = 'http://www.newsmartwave.net/wordpress/porto/';
$demos = porto_demo_types();
$demo_filters = porto_demo_filters();

wp_register_script('porto-admin-isotope', porto_js.'/jquery.isotope.min.js', array('jquery'), porto_version, true);
wp_enqueue_script('porto-admin-isotope');
?>
<div class="wrap about-wrap porto-wrap">
    <h1><?php _e( 'Welcome to Porto!', 'porto' ); ?></h1>
    <div class="about-text"><?php echo esc_html__( 'Porto is now installed and ready to use! Read below for additional information. We hope you enjoy it!', 'porto' ); ?></div>
    <div class="porto-logo"><span class="porto-version"><?php _e( 'Version', 'porto' ); ?> <?php echo porto_version; ?></span></div>
    <h2 class="nav-tab-wrapper">
        <?php
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto' ), __( "Welcome", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto-system' ), __( "System Status", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto-plugins' ), __( "Plugins", 'porto' ) );
        printf( '<a href="#" class="nav-tab nav-tab-active">%s</a>', __( "Install Demos", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto_settings' ), __( "Theme Options", 'porto' ) );
        ?>
    </h2>
    <div class="porto-section">
    </div>
    <div class="porto-thanks">
        <p class="description"><?php _e( 'Thank you, we hope you to enjoy using Porto!', 'porto' ); ?></p>
    </div>
</div>