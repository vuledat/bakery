<?php
function getCategory(){
    $cate = DB::table('categories')->get();
    return $cate;
}

function getSlider(){
    $sliders = DB::table('slider')->get();
    return $sliders;
}

function getProduct(){
    $products = DB::table('products')->where('is_feature',1)->orderBy('id', 'DESC')->paginate(3);
    return $products;
}

function getProductSale(){
    $products = DB::table('products')->where('is_sale',1)->orderBy('id', 'DESC')->paginate(3);
    return $products;
}

function getInfor(){
    $infor = DB::table('infor_main')->where('status',1)->first();
    return $infor;
}
?>