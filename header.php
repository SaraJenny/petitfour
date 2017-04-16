<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- För äldre IE-versioner -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title><?php bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
        <!-- Stilmall -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <!-- Faviconer -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/images/favicon/apple-touch-icon-144x144">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/favicon/apple-touch-icon-114x114">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/favicon/apple-touch-icon-72x72">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/favicon/apple-touch-icon-57x57">
        <!-- Ger plats åt plugins -->
        <?php wp_head(); ?>
    </head>
    <body>
        <main>
            <!-- Sidhuvud -->
            <header>
                <!-- Logotyp -->
                <a href="<?php echo get_option('home'); ?>">
                    <div id="logo">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Logotyp">
                        <h1>Petit Four</h1>
                    </div>
                </a>
                <!-- Meny -->
                <nav>
                    <?php wp_nav_menu(); ?>
                </nav>
            </header><!-- Sidhuvud slut -->