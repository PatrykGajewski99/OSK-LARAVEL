<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index() 
    {
        if(\Auth::check()){
            $id = \Auth::user()->id;
            $users = User::where('id', $id)->get();
            return view('changepassword', compact('users'));
        }
        else
            return view('/login');
    }

    public function changepassword(Request $request)
    {
        if(\Auth::check()){
        $id = \Auth::user()->id;
        $users = User::find($id);
        if(Hash::check($request->actualpassword, $users->password))                 // wprowadzone aktualne hasło zgadza się z hasłem użytkownika               
        {
            
            if($request->newpassword==$request->newpasswordagain)                   // potwierdzenie, ze nowe hasło jest wpisane dwa razy takie samo.
            {
                $users->password = Hash::make($request->newpassword);               // ustawienia nowego hasla uzytkownikowi
            }
            else {
                Alert::error('Error', 'Podane hasła nie są jednoznaczne');
                return view('changepassword', compact('users'));                   // przejscie ponownie do strony edycji hasła
            }
               
        
            if($users->save())                                                      // zapisanie zmian 
            { 
                Alert::success('Sukces', 'Hasło zostało zmienione prawidłowo');
                return view('changepassword', compact('users'));                            
            }       
        }
        else{
            Alert::error('Error', 'Wprowadzone hasło nie jest zgodne z hasłem użytkownika');
            return view('changepassword', compact('users'));
        } 
        }
        else
            return view('auth/login');
    }


}
