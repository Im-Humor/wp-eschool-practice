<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo("title"); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <div class="header-info-bar">
        <div class="header-bar-phone">
            555-555-5555
        </div>
        <div class="header-bar-address">
            1111 N 11th St., Phoenix, AZ
        </div>
        <div class="header-bar-socials">
            O O O O O
        </div>
    </div>

    <div class="navbar">
        <div class="navbar-logo">logo placeholder</div>
        <div class="navbar-navmenu">
            <?php wp_nav_menu(array(
                'menu' => 'Top Navbar Menu'
            )); ?>
        </div>
    </div>