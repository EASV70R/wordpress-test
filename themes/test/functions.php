<?php function func_wp_enqueue_style(){
    wp_enqueue_style("tt-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "func_wp_enqueue_style"); ?>
