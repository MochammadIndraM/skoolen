<?php

namespace App\Http\Controllers\loginRegisterFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
    return view('page.loginRegisterFeatures.Login-features');
   }
}
