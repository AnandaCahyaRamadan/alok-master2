<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $products = 
        [
            [
                "nama" => "Es krim enak",
                "harga" => 20000,
                "img" => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/2/6864638c-bd18-48b9-84ff-041659907006.jpg"
            ],
            [
                "nama" => "Es krim enak",
                "harga" => 20000,
                "img" => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/2/6864638c-bd18-48b9-84ff-041659907006.jpg"
            ],
            [
                "nama" => "Es krim enak",
                "harga" => 20000,
                "img" => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/2/6864638c-bd18-48b9-84ff-041659907006.jpg"
            ],
            [
                "nama" => "Es krim enak",
                "harga" => 20000,
                "img" => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/2/6864638c-bd18-48b9-84ff-041659907006.jpg"
            ],

        ];
        return view('landing', compact('products'));
    }
}
