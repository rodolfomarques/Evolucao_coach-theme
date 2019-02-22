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
   
        <div id="blog">
        <?php include get_template_directory() . '/components/blogsection.php'; ?>
        </div>
        

<?php get_footer()?>