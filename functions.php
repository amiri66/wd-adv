<?php 
function wp_adv_theme_support()
{
    add_theme_suport('tit;e-tag');
    add_theme_support('coustum-logo')
}

add_action('after_setup_theme','wp_adv_theme_suport');

function wp_adv_menus(){
    $locations = [
        'primary'=>'Destkopt Primary Left Sidebar',
        'footer'=> 'Footer Menu Items',
    
    ];
    register_nav_menus($locations);

}
add_actions('int','wp_adv_menus')

functipn wp_adv_rwgister_syles(){
    wp_enquene_style('wp-adv-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',[], '5.0.2,''all');
wp_enquene_style('wp-adv
}