<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() 
    {
        if(\Auth::check()){
            $dane = DB::table('users')->get();
            return view('actualusers', ['dane_wyswietl' => $dane]);
        }
        else
            return view('/login');
    }
    public function update_user(Request $request,$id)
    {
        // dd($request->all());
        // $validated = $request->validate([
        // 'privilege'=>['required','string'],
        // 'firstName' => ['required', 'string', 'max:255'],
        // 'lastName' => ['required', 'string', 'max:255'],
        // 'province' => ['required', 'string', 'max:255'],
        // 'town' => ['required', 'string', 'max:255'],
        // 'postCode' => ['required', 'string', 'min:6'],
        // 'street' => ['required', 'string', 'max:255'],
        // 'houseNumber' => ['required', 'string', 'max:255'],
        // 'phone' => ['required', 'string', 'min:9'],
        // 'pesel' => ['required', 'string', 'min:11','unique:users'],
        // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // ]);
        $firstName=$request->input('firstName');
        $secondName=$request->input('secondName');
        $lastName=$request->input('lastName');
        $province=$request->input('province');
        $town=$request->input('town');
        $postCode=$request->input('postCode');
        $street=$request->input('street');
        $houseNumber=$request->input('houseNumber');
        $flatNumber=$request->input('flatNumber');
        $phone=$request->input('phone');
        $pesel=$request->input('pesel');
        $pkkNumber=$request->input('pkkNumber');
        $licenceNumber=$request->input('licenceNumber');
        DB::update('update users set firstName = ?, secondName = ?, lastName = ?, province = ?, town = ?, postCode = ?, street = ?, houseNumber = ?,
        flatNumber = ?, phone = ?, pesel = ?, pkkNumber = ?, licenceNumber =? where id = ?',[$firstName,$secondName,$lastName,$province,$town,$postCode,
        $street,$houseNumber,$flatNumber,$phone,$pesel,$pkkNumber,$licenceNumber,$id]);
        Alert::success('Sukces', 'Dane zostały zmienione prawidłowo');
        return redirect()->route('allusers');
    }
    public function delete_function(Request $request,$id)
    {
        DB::delete('delete from users where id =? ',[$id]);
        Alert::success('Sukces', 'Użytkownik został usnięty');
        return redirect()->route('allusers');
    }
}
