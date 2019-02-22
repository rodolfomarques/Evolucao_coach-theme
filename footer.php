        <div id="footer-bg">
            <!-- banner do footer -->
        </div>
        <div id="footer"> 
            <div id="redes_sociais-conteiner">
                <div id="retorno">
                    <i class="material-icons ">arrow_drop_up</i>
                    <a href="#" id="botoao_topo" >Voltar ao topo</a>
                </div>
                <div id="redes_sociais">
                    <h4 class="titulos">siga nossas redes sociais</h4>
                    <img src="<?php bloginfo('template_url')?>/img/logo_face.png" alt="">
                    <img src="<?php bloginfo('template_url')?>/img/logo_insta.png" alt="">
                    <img src="<?php bloginfo('template_url')?>/img/logo_youtube.png" alt="">
                </div>
            </div>
            <div id="rodape">
                <img id="logo_footer" src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-rodape' ) ); ?>
            </div>
        </div>
        <?php wp_footer()?>
        <div id="creditos">
            <h4>Nathalia Clementino & Rodolfo Marques</h4>
        </div>
    </div>
</body>