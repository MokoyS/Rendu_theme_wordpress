<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ping-passion
 */

?>

<?php
get_header();
?>

<div class="banner-acceuil">
    <h1>PING-PASSION</h1>
    <h3>VOUS ACCEUILLE ET VOUS CONSEILLE </h3>
    <h4>Du mardi au vendredi de 8h à 18h</h4>
    <h4>Le samedi de 10h à 18h</h4>
    <p>7 QUAI D'AUSTERLITZ - 75013</p>
    <a href=""><h2>SHOP</h2></a>
</div>

<div class="grid-shop">
    <a href="http://localhost/php-site/wordpress/revetements/">
        <div class="revetements">
            <h1>REVETEMENTS</h1>
        </div>
    
    </a>
    <a href="http://localhost/php-site/wordpress/bois/">
        <div class="bois">
            <h1>BOIS</h1>
        </div>
    </a>
</div>

<?php get_footer(); ?>
 
