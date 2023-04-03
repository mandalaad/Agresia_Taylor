<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function adminindex(){
        return view('pages.admin.Admingallery');
    }
}
