<?php
/**
** activation theme
**/

// Change le texte 'Ajouter au panier' sur la page archive des produits

add_filter( 'woocommerce_product_add_to_cart_text', 'bryce_archive_add_to_cart_text' );
function bryce_archive_add_to_cart_text() {
return __( 'Acheter', 'your-slug' );
}

