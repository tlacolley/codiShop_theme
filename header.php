<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CodiShop</title>
        <?php wp_head() ?>
    </head>
    <body>

<header>

    <nav class="mainNav">
        <a href="<?php echo home_url("") ?>"><h1>CodiShop</h1></a>
        <?php wp_nav_menu() ?>
        <ul>
            <li><a href="#">Icon</a></li>
            <li><a href="#">Icon</a></li>
            <li><a href="#">Icon</a></li>

        </ul>
    </nav>
    <?php echo do_shortcode('[wpb-product-slider product_type="category" nav="true" category="17"]'); ?>

</header>
