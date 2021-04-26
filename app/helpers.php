<?php

function productImage($path)
{
    return $path && file_exists('./assets/images/product-images/'.$path) ? asset('/assets/images/product-images/'.$path) : asset('assets/images/not-found.png');
}


?>