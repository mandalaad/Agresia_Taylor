<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTablesController extends Controller
{
    public function adminindex(){
        return view('pages.admin.Admintables');
    }
}
