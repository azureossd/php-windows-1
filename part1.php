<?php
/*
 * Azure App Service Specialist Lab
 * Open Source Technologies - PHP Windows
 */

$settings = [
    "realpath_cache_size",
    "post_max_size",
    "memory_limit",
    "expose_php"
];

foreach($settings as $setting) {
    if($setting == "realpath_cache_size") {
        if ( ini_get('realpath_cache_size') != "8192K") {
            echo "Current realpath_cache_size = " . ini_get('realpath_cache_size') . ", </br>";
            
            echo "Change this to 8192 KB" . "</br></br>";
        }
        else {
            echo "realpath_cache_size is ". ini_get('realpath_cache_size') . " now </br></br>";
        }
    }
    else if($setting == "post_max_size") {
        if ( ini_get('post_max_size') != "16M") {
            echo "Current post_max_size = " . ini_get('post_max_size') . ", </br>";
            
            echo "Change this to 16M" . "</br></br>";
        }
        else {
            echo "post_max_size is ". ini_get('post_max_size') . " now </br></br>";
        }
    }
    else if($setting == "memory_limit") {
        if ( ini_get('memory_limit') != "256M") {
            echo "Current memory_limit = " . ini_get('memory_limit') . ", </br>";
            
            echo "Change this to 256M" . "</br></br>";
        }
        else {
            echo "memory_limit is ". ini_get('memory_limit') . " now </br></br>";
        }
    }
    else if($setting == "expose_php") {
        if ( ini_get('expose_php') != false) {
            echo "Current expose_php = " . (boolval(ini_get('expose_php')) ?  "On" : "Off") . ", </br>";
            
            echo "Change this to Off" . "</br></br>";
        }
        else {
            echo "expose_php is ". (boolval(ini_get('expose_php')) ?  "On" : "Off") . " now </br></br>";
        }
    }
}

?>