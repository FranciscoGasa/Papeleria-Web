<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    static function logout(){
        Auth::logout();
        return redirect('/');
    }

    static function edit(){
        return view('user.edit');
    }

    public function update(Request $request) {
        $user = Auth::user();
        
        if ($request->oldPass != "") {
            if (!Hash::check($request->oldPass, $user->password))
                return back()->withInput()->withErrors(['oldPass' => ['La contraseña original no coincide.']]);
            else if ($request->newPass == "" || $request->newPass != $request->repeatedPass)
                return back()->withInput()->withErrors(['newPass' => ['La nueva contraseña está vacía o mal repetida.']]);
            else 
                $user->password = Hash::make($request->newPass);
        }
        $user->name = $request->name;
        $user->save();
        return back()->with(['success' => ['Los datos han sido modificados.']]);
        }
       
}
