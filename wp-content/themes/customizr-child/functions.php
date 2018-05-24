<?php
add_action(  'wp_enqueue_scripts',  'theme_enqueue_styles'  );
function  theme_enqueue_styles()  {wp_enqueue_style(  'parent-style',  get_template_directory_uri()  .  '/style.css' );
                                   wp_enqueue_style(  'child-style',  get_stylesheet_uri(),  array(  'parent-style'  )  );
                                  }



// Function Custom Post Type Infos

function wpm_custom_post_type() {

	//On insére les différents libellé du dashboard
	$labels = array(
		'name'                => _x( 'Informations', 'Post Type General Name'),
		'singular_name'       => _x( 'Information', 'Post Type Singular Name'),
		'menu_name'           => __( 'Informations'),
		'all_items'           => __( 'Toutes les informations'),
		'view_item'           => __( 'Voir les informations'),
		'add_new_item'        => __( 'Ajouter une nouvelle informations'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer une informations'),
		'update_item'         => __( 'Modifier une informations'),
		'search_items'        => __( 'Rechercher une informations'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	

	//On ajoute les arguments
	$args = array(
		'label'               => __( 'Informations'),
		'description'         => __( 'Tous nos Informations'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-welcome-write-blog',
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', ),	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'infos'),

	);
    
    //On save
	register_post_type( 'infos', $args );

}
//On initialise
add_action( 'init', 'wpm_custom_post_type', 0 );



add_action( 'init', 'wpm_add_taxonomies', 0 );

function wpm_add_taxonomies() {
	
    
    //Catégorie des infos
	$labels_cat_infos = array(
		'name'                       => _x( 'Catégories', 'taxonomy general name'),
		'singular_name'              => _x( 'Catégorie', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une catégorie'),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Editer une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'not_found'                  => __( 'Pas de catégories trouvées'),
		'menu_name'                  => __( 'Catégories des infos'),
	);

	$args_cat_infos = array(
		'hierarchical'          => true,
		'labels'                => $labels_cat_infos,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'categories-infos' ),
	);

	register_taxonomy( 'categoriesinfos', 'infos', $args_cat_infos );
}