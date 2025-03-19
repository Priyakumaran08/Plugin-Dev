<?php

//check if file is access directly
// if(!defined('WPINC')){
//     exit("Can't access this file directly");
// }
/*
*Devy Gallery Plugin
*/

class Devy_Gallery_Plugin{
    public function __construct(){
        echo("inside class");
    }
    
}

//init
new Devy_Gallery_Plugin();