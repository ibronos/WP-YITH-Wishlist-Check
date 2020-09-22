<?php
//yourthemes/woocommerce/content-product.php

$product_id = get_the_ID(); // id of product
$exists = YITH_WCWL()->is_product_in_wishlist( $product_id );
echo $exists; 

//if return 1 product already in wishlist.
?>
