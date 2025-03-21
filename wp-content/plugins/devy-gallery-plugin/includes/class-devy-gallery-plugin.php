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
        //args
        $args = [
            'label'=>"Devy Gallery Plugin",
            'description' => "Devy Gallery Plugin for Plugindevs",
            'show_ui' => true,
        ];
        
        register_post_type('devy_gallery_plugin', $args);
    }
}

//init
$init = new Devy_Gallery_Plugin();
$init->init();