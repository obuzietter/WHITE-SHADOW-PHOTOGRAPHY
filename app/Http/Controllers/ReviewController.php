<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function sendData(Request $request){
        $review = new Review();
        $review->name = $request->name;
        $review->phone = $request->phone;
        $review->email =  $request->email;  
        $review->review =   $request->review;
        $review->save();
        return $review;
        // return $request->input();
    }
}
