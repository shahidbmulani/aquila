<?php

/**
 * Header Template
 * 
 * @package Aquila
 */

 ?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <?php 
        if(function_exists('wp_body_open')){
            wp_body_open(); 
        }
    ?>
    <header>Header</header>