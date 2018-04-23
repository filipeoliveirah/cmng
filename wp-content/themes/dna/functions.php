<?
    
    
    function limitarTexto($texto, $limite){
        $contador = strlen($texto);
        if ( $contador >= $limite ) {      
            $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
            return $texto;
        }
        else{
            return $texto;
        }
    }

    // FUNÇÃO QUE MOSTRA IMAGEM EM DESTAQUE NA LISTAGEM DO BLOG
    function your_columns_head($defaults) { 
        $new = array();
        $tags = $defaults['my_post_thumbs']; // Salva a coluna Imagem
        unset($defaults['my_post_thumbs']); // Remove a coluna Imagem da lista
         
        foreach($defaults as $key=>$value) {
        if($key=='title') { // Quando encontrar a coluna titulo
        $new['my_post_thumbs'] = $tags; // Coloque a coluna Imagem antes dele
        }
        $new[$key]=$value;
        }         
        return $new;
    }
    add_filter('manage_posts_columns', 'your_columns_head');   

    //Adiciona imagem destacada a pagina de blogpost e pagetype
    add_theme_support( 'post-thumbnails' );
    
    // Adicona área de widgets
    function dna_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'E-book', 'dna' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="blog-widget-subtitle">',
            'after_title'   => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'dna_widgets_init' );

?>