<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideShow;

class SlideShowController extends Controller
{
     public function index()
    {
        return response()->json(Slideshow::all());
    }

    public function show($STT)
    {
    $slide = Slideshow::find($STT);
    if (!$slide) {
        return response(null,404);
    }
    return response()->json($slide);
}

}
