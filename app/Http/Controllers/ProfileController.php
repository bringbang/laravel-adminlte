<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
        ->with([
            "full_name" => "Nitit Duangsanglek",
            "email"     => "jane_spr@hotmail.com",
            "phone"     => "-",
            "mobile"    => "086-XXXXXXX",
            "address"  => "45/45 m.6 kukot lumluka pathumthani 12130",
            "website" => "https://bringbang.medium.com/",
            "github" => "bringbang",
            "twitter" => "bringbang",
            "Instagram" => "bringbang_",
            "facebook" => "Nitit Duangsanglek",
            "education" => "Silpakorn University",

        ]);
    }
}
