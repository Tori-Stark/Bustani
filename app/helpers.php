<?php

function productImage($path)
{
    return $path && file_exists('./assets/images/product-images/'.$path) ? asset('/assets/images/product-images/'.$path) : asset('assets/images/not-found.png');
}

function userImage($path)
{
    return $path && file_exists('./assets/images/users/'.$path) ? asset('/assets/images/users/'.$path) : asset('assets/images/avatar.png');
}


?>