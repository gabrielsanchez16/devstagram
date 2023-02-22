<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request);
        //dd($request->get('name'));


        //Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);
        
        //Validacion
        $this->validate($request,[
            'name'=>"required|max:50",
            'username'=>"required|unique:users|min:3|max:15",
            'email'=>"required|unique:users|email",
            'password'=>"required|min:5|confirmed",
            
            
        ]);

        User::create([
            'name'=> $request->name,
            'username'=> $request->username ,
            'email'=> $request->email,
            'password'=> Hash::make($request->password) ,

        ]);

        //Autenticar
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //Otra forma de autenticar

        // auth()->attempt($request->only('email','password'));

        // Redireccionar
        return redirect()->route('post.index');
    }
}
