<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('admin.page.register');
    }
    public function register(Request $request){
        // dd($request->all());
        // $data = $request->validate([
        //     'name' =>['required', 'string', 'max:50'],
        //     'email'=>['required', 'string', 'max:100', 'unique:users'],
        //     'password'=>['required', 'string', 'min:8', 'confirmed']
        // ]);
        // $user = User::query()->create($data);
        // Auth::login($user);
        // $request->session()->regenerate();
        // return redirect()->intended('/');
        $request->merge(['password'=>Hash::make($request->password)]);
        try {
            User::create($request->all());
        }catch(\Throwable $th){
            dd($th);
        }
        return redirect()->intended('/auth/login');
        
    }
}
