<?php 

/**
 * ---------------------------------------------------------------------------
 * support theme
 * ---------------------------------------------------------------------------
 */
add_theme_support('post-thumbnails');

add_theme_support('html5', ['search-form']);


/**
 * ---------------------------------------------------------------------------
 * Change function except length 20 chars
 * ---------------------------------------------------------------------------
 */
function custom_excerpt_length( $length ) 
{
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * ---------------------------------------------------------------------------
 * Menus navigate
 * ---------------------------------------------------------------------------
 */
function register_my_menus()
{
	register_nav_menus([
		'hader-nav'		=>	'Header Navigation',
		'footer-nav'	=>	'Footer Navigation'
	]);
}

add_action('init', 'register_my_menus');



/**
 * ---------------------------------------------------------------------------
 * Support sidebars (template use = dynamic_sidebar('id_sidebar'))
 * ---------------------------------------------------------------------------
 */
function my_sidebars()
{
	register_sidebar([
		'name'          =>  'sidebar right',
		'id'            =>  'sidebar-right',
		'descripcion'   =>	'barra lateral',
		'class'         =>	'',
		'before_widget' =>	'',
		'after_widget'  =>	'',
		'before_title'  =>	'<h2 class="title">',
		'after_title'   =>	'</h2>'
	]);

	register_sidebar([
		'name'          =>  'sidebar top',
		'id'            =>  'sidebar-top',
		'descripcion'   =>	'sidebar top',
		'class'         =>	'',
		'before_widget' =>	'',
		'after_widget'  =>	'',
		'before_title'  =>	'',
		'after_title'   =>	''
	]);

}

add_action('widgets_init', 'my_sidebars');



/**
 * ---------------------------------------------------------------------------
 * Avaible disqus 
 * ---------------------------------------------------------------------------
 */
function disqus_comments($disqus_shortname) 
{
    global $post;

    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');

    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}


/**
 * ---------------------------------------------------------------------------
 * Filter post search
 * ---------------------------------------------------------------------------
 */
function SearchFilter($query) 
{
	if($query->is_search) 
	{
		$query->set('post_type', 'post');
	}

	return $query;
}
 
add_filter('pre_get_posts','SearchFilter');
 


