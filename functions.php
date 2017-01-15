<?php



if ( ! function_exists( 'nat_setup' ) ) :

function nat_setup() {	
// Remove a barra de admin
add_filter('show_admin_bar', '__return_false');

// Remove a versão do WordPress do cabeçalho
remove_action('wp_head', 'wp_generator');

// Remove wlwmanifest_link - Recurso usado pelo Windows Live Writer. 
remove_action('wp_head', 'wlwmanifest_link');
//
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

//
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//
remove_action('wp_head', 'start_post_rel_link', 10, 0);
//
remove_action( 'wp_head', 'feed_links', 2 ); 

// Remover link RSD
remove_action('wp_head', 'rsd_link');

// Ativa o feed
add_theme_support('automatic-feed-links'); 
// Suporte a resumo nas paginas
add_post_type_support( 'page', 'excerpt' );

// Remove estilos da galeria
add_filter('use_default_gallery_style', '__return_false');
// Ativa posts-formats
add_theme_support('post-formats', array('audio', 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );
}

endif; // nat_setup
add_action( 'after_setup_theme', 'nat_setup' );

// Estilos e scripts
function tutsup_enqueue_scripts() {
    // Versão do nosso tema
    $tutsup_version = '1.0';   

    // Style.css
    wp_enqueue_style('tutsup-style-description', get_stylesheet_uri(), array(), $tutsup_version, 'all');
    // Um arquivo de CSS qualquer dentro da pasta css/
    wp_enqueue_style('tutsup-style1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $tutsup_version, 'all');
    wp_enqueue_style('tutsup-style2', get_template_directory_uri() . '/css/bootstrap-social.css', array(), $tutsup_version, 'all');
    wp_enqueue_style('tutsup-style3', get_template_directory_uri() . '/css/font-awesome.css', array(), $tutsup_version, 'all');
    wp_enqueue_style('tutsup-style4', get_template_directory_uri() . '/css/style-def.css', array(), $tutsup_version, 'all');
    wp_enqueue_style('tutsup-style5', get_template_directory_uri() . '/css/social-likes_birman.css', array(), $tutsup_version, 'all');
}

// Carrega os estilos e scripts
add_action('wp_enqueue_scripts', 'tutsup_enqueue_scripts');

// Carega scripts
function starter_scripts() {
    // Carega os scripts js
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3', true);
    wp_enqueue_script('jquery');   

    wp_enqueue_script('includes1', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('includes2', get_template_directory_uri() . '/js/social-likes.min.js', '', '', true);
    wp_enqueue_script('includes3', get_template_directory_uri() . '/js/scripts-actions.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'starter_scripts');

/*
* Adicion supoete a imagens personalizadas
*
*/
function tutsup_setup() {       
    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support('post-thumbnails');
        add_image_size( 'single-post-home', 284, 195, true ); 
        add_image_size( 'imagem-do-slide', 1073, 409, true );
        add_image_size( 'Thumb Test cropped', 100, 100, true );
        }     

    // Registra um menu
    register_nav_menus(array(
        'header' => 'Header',
    ));
}

add_action('after_setup_theme', 'tutsup_setup');


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus(array(
    'primary' => __('Primary Menu', 'THEMENAME'),
));

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}





$args = array(
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" required></textarea></p>',
    'fields' => apply_filters('comment_form_default_fields', array(
        'author' =>
        '<p class="comment-form-author">' .
        '<label for="author">' . __('Name', 'domainreference') . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" size="30"' . $aria_req . ' required/></p>',
        'email' =>
        '<p class="comment-form-email"><label for="email">' . __('Email', 'domainreference') . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" class="form-control" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' required /></p>',
        'url' =>
        '<p class="comment-form-url"><label for="url">' .
        __('Website', 'domainreference') . '</label>' .
        '<input id="url" class="form-control" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) .
        '" size="30" /></p>'
            )
    )
);
comment_form($args);

function awesome_comment_form_submit_button($button) {
	$button =
		'<input name="submit" type="submit" class="btn btn-info pull-right" tabindex="5" id="[args:id_submit]" value="Cadastrar" />' .
		get_comment_id_fields();
	return $button;
}
add_filter('comment_form_submit_button', 'awesome_comment_form_submit_button');


//functions file
function the_category_exclude($separator=', ',$exclude='') {
	$toexclude = explode(",", $exclude);
	$newlist = array();
	foreach((get_the_category()) as $category) {
		if(!in_array($category->category_nicename,$toexclude) && ($category->category_parent == 0)){
			//$newlist[] = $category->cat_name;
			$newlist[] = '<a href="' . get_category_link( $category->term_id ) . '" class="cat-link" title="' . sprintf( __( "Ver todas as postagens de %s" ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
		}
	}
	return implode($separator,$newlist);
}


//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
  
//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';
  
    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out); 
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li class='active'><span",$out);   
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);
  
    return '<ul class="pagination pagination-centered">'.$out.'</ul>';
}

// Registro das suas widgets
// Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'sidebar-1',
		'class'         => 'panel panel-default box-n',
		'name'          => __( 'POSTS MAIS QUENTES', 'text_domain' ),
		'description'   => __( 'Postes Mais Acessados', 'text_domain' ),
		'before_title'  => '<h2 class="perfil">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="home" class="tab-pane fade in active">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );

/*-------------------------------------------
 INCLUDES DE ARQUIVOS
---------------------------------------------*/
include get_template_directory() . '/custon-post-type/galerias.php';