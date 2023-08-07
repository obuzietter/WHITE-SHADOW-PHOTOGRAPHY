<?php

namespace App\Http\Controllers;

use App\Models\Image;


class ImageController extends Controller
{
    function getImages(){

        $images = Image::all();
        return view('gallery', compact("images"));
        
    }
}
