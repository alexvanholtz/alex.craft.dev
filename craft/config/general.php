<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    '*' => array(

    ),

    'localhost' => array(

	    'devMode' => true,
        'siteUrl' => array(
            'en' => 'http://localhost:8888/alex.craft.dev/',
        ),

        'combineMinifyAssets' => false,

        'environmentVariables' => array(
            'baseUrl' => 'http://localhost:8888/alex.craft.dev/',       
            'basePath' => '/Applications/MAMP/htdocs/alex.craft.dev/',       
        ),          
  
    ),

    'craft.dev' => array(

        'devMode' => true,
        'siteUrl' => array(
            'en' => 'http://alex.craft.dev:8888/',
        ),

        'combineMinifyAssets' => false,

        'environmentVariables' => array(
            'baseUrl' => 'http://alex.craft.dev:8888/',       
            'basePath' => '/Applications/MAMP/htdocs/alex.craft.dev/',       
        ),          
  
    ),     

);
