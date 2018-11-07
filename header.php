<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CodiShop</title>
        <?php wp_head() ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>

<header>

    <nav class="mainNav">
        <a href="<?php echo home_url("") ?>"><h1>CodiShop</h1></a>
        <?php wp_nav_menu() ?>
        <ul class="iconList">
            <li><a href="#"><i class="fas fa-user-astronaut"></i></a></li>
            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
            <li><a href="#"><i class="fas fa-search"></i></a></li>

        </ul>
    </nav>
    <?php echo do_shortcode('[wpb-product-slider product_type="category" nav="true" category="17"]'); ?>

</header>
