<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function adminindex(){
        return view('pages.admin.Adminindex');
    }
}
