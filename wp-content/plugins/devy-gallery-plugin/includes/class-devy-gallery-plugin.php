<?php

//check if file is access directly
// if(!defined('WPINC')){
//     exit("Can't access this file directly");
// }
/*
*Devy Gallery Plugin
*/

class Devy_Gallery_Plugin{

    public function init(){
        //add action
        add_action('init', array($this, 'registerPostType'));
    }

    public function registerPostType(){

        //labels
        $labels = [
            'name'               => 'Devy Gallery',
            'singular_name'      => 'Devy Gallery',
            'menu_name'          => 'Devy Gallery',
            'name_admin_bar'     => 'Devy Gallery',
            'add_new'            => 'Add New Gallery',
            'add_new_item'       => 'Add New Gallery',
            'new_item'           => 'New Gallery',
            'edit_item'          => 'Edit Gallery',
            'view_item'          => 'View Gallery', 
            'all_items'          => 'All Galleries',
            'search_items'       => 'Search Galleries',
            'parent_item_colon'  => 'Parent Gallery:',
            'not_found'          => 'No Gallery found.',
            'not_found_in_trash' => 'No Gallery found in Trash.',
        ];
        
        //args
        $args = [
            'label'=>"Devy Gallery Plugin",
            'labels' => $labels,
            'description' => "Devy Gallery Plugin for Plugindevs",
            'show_ui' => true,
            'supports' =>['title']
        ];
        
        register_post_type('devy_gallery_plugin', $args);
    }
}

//init
$init = new Devy_Gallery_Plugin();
$init->init();