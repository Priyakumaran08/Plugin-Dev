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
        echo("inside class");
    }
    
}

//init
$init = new Devy_Gallery_Plugin();
$init->init();