<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="ディスクリプションを入力">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- reset.css destyle -->
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="p-shadow"></div>
        <header class="l-header p-header">
            <h2>Hamburger</h2>
            
            <?php get_search_form(); ?>
            <a href="#" class="js-button is-click">Menu</a>
            
        </header>