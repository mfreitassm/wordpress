
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awsome Theme</title>
    <?php wp_header();?>

</head>
<body <?php body_class()?>>
<header>
<div class="container">
<?php wp_nav_menu(

    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'nav'
    )

    );?>
</div>
</header>

