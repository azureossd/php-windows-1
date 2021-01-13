<?php
/*
 * Azure App Service L200 Lab
 * Open Source Technologies - PHP Windows
 */

$modules = [
    "ldap",
    "mongodb"
];

foreach($modules as $module) {
    if(!extension_loaded($module)) {
        if($module == "ldap") {
            echo "LDAP APPLICATION ERROR #1404 LDAP Extension Not Loaded. </br></br>";
        } else if ($module == "mongodb") {
            echo "PHP Error: Class 'MongoDB\Client' not found </br></br>";
        }
    } else {
        if($module == "ldap") {
            echo "LDAP extension has been installed, you are ready to go! </br></br>";
        } else if ($module == "mongodb") {
            echo "Mongodb extension has been installed, find it from installed extensions, you are ready to go! </br></br>";
        }
    }

}

print_r(get_loaded_extensions());

?>