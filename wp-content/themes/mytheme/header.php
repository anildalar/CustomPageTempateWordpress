<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title><?php bloginfo('title'); ?>-<?php bloginfo('description'); ?></title>
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
          <header>
                <?php wp_nav_menu( array('theme_location'=>'primary_menu') ); ?>

          </header>