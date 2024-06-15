<?php

namespace App\Http\Controllers\loginRegisterFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
   public function index(){
    return view('page.loginRegisterFeatures.Login-features');
   }

   public function authenticate(Request $request){
      $validator = Validator::make($request->all(),[
         'username' => 'required',
         'password' => 'required'
      ]);

      if ($validator->fails()) {
         return back()->with('loginError', 'login failed! coba kembali!');
      }

      $user = User::where('username', $request->username)->first();

      if (!$user) {
         return back()->with('loginError', 'login failed! coba kembali!');
      }

      $credentials = $request->only('username', 'password');

      if (Auth::guard('web')->attempt($credentials)) {
         $user = Auth::user();
         
         if ($user->role == 'admin') {
            return redirect()->route('Admin.Dashboard');
         }

         abort(403, 'Unauthorized');
      }else{
         // login gagal
         return back()->withInput();
      }
   }

   public function logout(Request $request){
      Auth::logout();
            
      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/');
   }
}
