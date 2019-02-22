<?php get_header()?>
<?php wp_head()?>

<body>
    <div id="main-grid">
        <div class="central">
            <?php wp_nav_menu( array( 
                                'theme_location' => 'menu-topo', 
                                'container_class' => 'menu central',
                                ) 
                            ); 
            ?>
        </div>
        
        <div class="central">
        <?php include get_template_directory() . "/components/post_loop.php"; ?>
        </div>
<?php get_footer()?>