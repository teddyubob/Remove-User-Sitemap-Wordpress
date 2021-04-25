<?php
/*
Plugin Name: Remove User Sitemap
Description: Removes User from Sitemap
Reference URL: https://make.wordpress.org/core/2020/07/22/new-xml-sitemaps-functionality-in-wordpress-5-5/
Wordpress Version: 5.7.1
Version: 0.1
Author: Teddy
*/
add_filter(
    'wp_sitemaps_add_provider',
    function( $provider, $name ) {
        if ( 'users' === $name ) {
            return false;
        }
 
        return $provider;
    },
    10,
    2
);

