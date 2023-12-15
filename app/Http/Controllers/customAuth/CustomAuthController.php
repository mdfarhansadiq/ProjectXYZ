<?php

namespace App\Http\Controllers\customAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use App\Models\CustomAuthModel;

class CustomAuthController extends Controller
{
    public function customRegistrationView()
    {
        return view('customAuth.registration');
    }

    public function customRegistrationCreate(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:custom_auths',
            'pass' => 'required|min:7',
        ]);

        $data = new CustomAuthModel();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Crypt::encrypt($req->pass);

        $data->save();

        Session::put('useremail', $req->email);
        Session::put('userpass', $req->pass);
        Session::put('userid', $data->id);

        return redirect('/admin');
    }

    public function customLoginView()
    {
        return view('customAuth.login');
    }


    public function customLoginCreate(Request $req)
    {
        $user = CustomAuthModel::where('email', $req->email)->first();
        //dd($user);
        if ($user && $req->pass == Crypt::decrypt($user->password)) {

            Session::put('useremail', $req->email);
            Session::put('userpass', $req->pass);
            Session::put('userid', $user->id);

            return redirect('/admin');

        } else {

            return redirect('/');

        }
    }



    public function customLogout(Request $req)
    {
        //dd($req);
        if (Session::has('useremail')) {
            Session::flush();
            return redirect('/');
        }
   }
}
