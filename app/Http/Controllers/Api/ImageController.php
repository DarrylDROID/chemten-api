<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getImage($image)
    {
        return response()->file(public_path("/storage/".$image));
    }
}
