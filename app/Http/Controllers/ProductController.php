<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
  
    
   
   
   
     public function showProducts()  {
        $products = [
            ['id' => 1, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxYsygqK5gQtMzf2_eTCpAA0tBh_JL7ELvBQ&usqp=CAU', 'name' => 'Product 1', 'price' => 5000],
            ['id' => 2, 'image' => 'https://visitokinawajapan.com/wp-content/uploads/2021/11/di133_kv_okinawan-island-vegetables.jpg', 'name' => 'Product 2', 'price' => 2000],
            ['id' => 3, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm0nPYWMxoZNWEvhZos0NtcCfuQpEp8b5ShQ&usqp=CAU', 'name' => 'Product 3', 'price' => 14000],
            ['id' => 4, 'image' => 'https://hips.hearstapps.com/hmg-prod/images/background-with-big-fresh-cabbage-royalty-free-image-1701363221.jpg?crop=1.00xw:0.752xh;0,0.108xh&resize=1200:*', 'name' => 'Product 4', 'price' => 25000],
            ['id' => 5, 'image' => 'https://t4.ftcdn.net/jpg/05/37/04/61/360_F_537046123_s8JVn2NrClPQDOryhSm8jonYZPfIzPRX.jpg', 'name' => 'Product 5', 'price' => 10000],
            ['id' => 6, 'image' => 'https://www.allrecipes.com/thmb/yZXg4JBuCszkSx2y1og-pvjt0Pk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Are-Potatoes-Vegetables-3x2-1-e1743111587b4ff799c84944070945fe.png', 'name' => 'Product 6', 'price' => 60000],
            ['id' => 7, 'image' => 'https://cdn.pixabay.com/photo/2012/04/13/21/00/bell-pepper-33623_640.png', 'name' => 'Product 7', 'price' => 28000],
            ['id' => 8, 'image' => 'https://nutritionadvance.com/wp-content/uploads/2018/01/bok-choy-chinese-cabbage.jpg', 'name' => 'Product 8', 'price' => 10000],
        ];

        return response()->json($products);
    }



    public function showPermission()  {
        $products = [
            "view" => true,
            "create" => true,
            "edit" => false,
            "delete" => true
        ];

        return response()->json($products);
    }














}


