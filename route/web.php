<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page == 'home') {
    include "page/home.php";
} elseif ($page == 'produk') {
    include "page/more_produc.php";
} elseif ($page == 'Buy Now karton') {
    include "page/detail_produk_karton.php";
}  
elseif ($page == 'Buy Now pcs') {
    include "page/detail_produk_pcs.php";
}     
elseif ($page == 'Buy Now box') {
    include "page/detail_produk_box.php";
}   
   ?>