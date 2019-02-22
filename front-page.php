<?php get_header()?>
<?php wp_head()?>
<body>
    <div id="main-grid">
        <div id="page-top-bg">
           <!-- banner do background do topo da página -->
            <img src="<?php bloginfo('template_url')?>/img/banner1.png" alt="">
        </div>
        <?php wp_nav_menu( array( 
                                'theme_location' => 'menu-topo',
                                'container_class' => 'menu central',
                                ) 
                            ); 
        ?>
        <div id="page-top">
            
            <div id="logo_page-top_container">
                <img id="logo_page-top" src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
            </div>
        </div>

        <div id="blog">
            <?php include get_template_directory() . '/components/blogsection.php'; ?>
        </div>

        <div id="area-coach-bg">
            <!-- banner da área do coach -->
        </div>
        <div id="area-coach">
            <div id="textos-coach">
                <h3 class="titulos">COACH INTEGRAL SISTÊMICO</h3>
                <p class="paragrafos">Com formação em Coaching Integral Sistêmico pela FEBRACIS (Federação Brasileira de Coaching Integral Sistêmico), as irmãs Kalina e Carla Aquino atuam como coaches, consultoras e analistas  comportamentais</p>
                <h4 class="sub-titulo" >TRANSFORME A SUA VIDA HOJE!</h4>
                <a href="#" class="botao_padrao">Saiba Como</a>
            </div>
            <div id="img-coach_container">
                <img id="img-coach" src="<?php bloginfo('template_url')?>/img/coach.png" alt="">
            </div>
            
        </div>
        <div id="treinamentos">
            <div>

            </div>
            <div>
                <h3 class="titulos">UM TREINAMENTO QUE VAI MUDAR A SUA VIDA</h3>
                <p class="paragrafos">Entre em contato conosco e agende um dos nosso horários semanais. Aprenda mais como nossos treinamentos podem mudar a vida da sua empresa.</p>
                <a href="#" class="botao_padrao">Quero Participar</a>
            </div>
        </div>

<?php get_footer()?>