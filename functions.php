<?php
// width 
$content_width = 636;

// remove cats from home
function exclude_category_home( $query ) {
if ( $query->is_home ) {
$query->set( 'cat', '-17, -18, -274, -279' );
}
return $query;
}

add_filter( 'pre_get_posts', 'exclude_category_home' );


// STYLESHEETS
function PyroRadio_theme_style(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'fonts-css', '//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.css' );
} 

add_action('wp_enqueue_scripts', 'PyroRadio_theme_style');

// JAVASCRIPT
function PyroRadio_theme_js(){
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', '', '', true );
}
add_action('wp_enqueue_scripts', 'PyroRadio_theme_js');

// FEATURE IMG
add_theme_support( 'post-thumbnails' ); 

// EXCERPT LENGTH
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// EXCERPT [...]
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// PAGENATION
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


/**
 * Search SQL filter for matching against post title only.
 *
 * @link    http://wordpress.stackexchange.com/a/11826/1685
 *
 * @param   string      $search
 * @param   WP_Query    $wp_query
 */
function wpse_11826_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );





//automatically create bit.ly url for wordpress widgets
function bitly()
{
    //login information
    $url = get_permalink();  //for wordpress permalink
    $login = 'pyroradio';   //your bit.ly login
    $apikey = 'R_77f270ed64be4effad997310b9746cff'; //add your bit.ly API
    $format = 'json';   //choose between json or xml
    $version = '2.0.1';
    //generate the URL
    $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$apikey.'&format='.$format;
 
    //fetch url
    $response = file_get_contents($bitly);
//for json formating
    if(strtolower($format) == 'json')
    {
        $json = @json_decode($response,true);
        echo $json['results'][$url]['shortUrl'];
    }
    else //for xml formatting
    {
        $xml = simplexml_load_string($response);
        echo 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
    }
}

// short title
function short_title($after = '', $length)
{
  $mytitle = get_the_title();
  if (strlen($mytitle) > $length) {
    $mytitle = substr($mytitle, 0, $length);
    $i = strrpos($mytitle, " ");
    $mytitle = substr($mytitle, 0, $i);
    echo $mytitle . $after;
  } else {
    echo $mytitle;
  }
}


