<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function _theme_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    return $classes;
}
add_filter( 'body_class', '_theme_body_classes' );

/**
 * Resize Images
 * 
 * @param int $width
 * @param int $height
 * @param string $url
 * @return string $image
 **/
function _theme_resize_img($url, $width = 180, $height = 150)
{
    if (!$url) {
        global $post;
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    }

    $image = aq_resize($url, $width, $height, TRUE);
    if (!$image || !isset($image)) {
    	$placeholder = get_template_directory_uri() . '/source/img/placeholder.png';
    	$image = aq_resize($placeholder, $width, $height, TRUE);
    }
    return $image ? $image : $url;    
}

/**
 * Resume Posts
 * 
 * @param int $words
 * @param boolean $echo
 * @param int $id_post
 * @return string $retorno
 */
function _theme_resume_post($words = 40, $echo = TRUE, $id_post = 0)
{
    $allowed_tags = '<a>,<i>,<em>,<b>,<strong>,<ul>,<ol>,<li>,<span>,<blockquote>,<img>';
    if ($id_post > 0) {
        $post = get_post($id_post);
    } else {
        global $post;
    }

    $text = preg_replace('/\[.*\]/', '', strip_tags($post->post_content, $allowed_tags));
    $text = explode(' ', $text);
    $tot = count($text);

    if ($tot < $words)
        $words = $tot;

    $output = '';
    for ($i = 0; $i < $words; $i++) {
        $output .= $text[$i] . ' ';
    }

    $retorno = force_balance_tags(rtrim($output));

    if ($i < $tot)
        $retorno .= '...';

    if ($echo == TRUE) {
        echo $retorno;
    } else {
        return $retorno;
    }
}

/**
 * Show Pagination
 * 
 * @param string $type
 * @param string $search
 * @return string $retorno
 */
function _theme_show_pagination($type = 'post', $search = NULL, $categoria = NULL)
{
    if (!is_null($search)) {
        $loop = new WP_Query(array('s' => $search));
    }elseif (!is_null($categoria)) {
        $loop = new WP_Query(array('post_type' => $type, 'cat' => $categoria));
    }else{
        $loop = new WP_Query(array('post_type' => $type));
    }

    $big = 99999;
    $pages = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $loop->max_num_pages,
        'type'      => 'array',
        'prev_next' => TRUE,
        'prev_text' => __('<span aria-hidden="true"> << </span>'),
        'next_text' => __('<span aria-hidden="true"> >> </span>'),
    ));

    if( is_array($pages)) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
       echo '</ul>';
    }
    wp_reset_query();
}


/**
 * Show Menu
 * 
 * @param string $name_menu
 * @return string $output
 */
function _theme_show_menu($name_menu = 'primary')
{
    $output = '';
    switch ($name_menu) {

        case 'primary':
            $output = wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => 'ul',
                    'items_wrap'     => '<ul class="nav-menu">%3$s</ul>',
                    'echo'           => 0,
                ));
            break;

        default:
            $output = wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => 'ul',
                'items_wrap'     => '<ul>%3$s</ul>',
                'echo'           => 0,
            ));
            break;

    }

    return $output;
}


function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyBnqxaud76LltauPZpxnXiLOHB_G3adfcc';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');