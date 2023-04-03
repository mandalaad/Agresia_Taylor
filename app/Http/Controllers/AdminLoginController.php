<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class AdminLoginController extends Controller
{
    public function adminindex(){
        return view('pages.admin.adminlogin');
    }
    public function login(Request $request){
        $data = $request->only(['email', 'password']);
        $response = Http::post('http://172.168.102.134:7889/api/login', ['email' => $data['email'], 'password' => $data['password']]);
        $this->storeJWT($request, json_decode($response->body()));
        return redirect()->route('adminindex');
    }
    public function storeJWT(Request $request, $data){
        try{
            $token_enc = Crypt::encryptString($data->access_token);
            $request->session()->put(['token' => $token_enc, 'email' => $data->data->email, 'level' => $data->data->level]);
        }catch(Exception $e){
            return $e;
        }
        return true;
    }
}
