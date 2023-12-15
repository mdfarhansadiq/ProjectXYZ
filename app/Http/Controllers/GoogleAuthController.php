<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\UserAuthModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GoogleAuthController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = UserAuthModel::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Create a new user
                $user = new UserAuthModel([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                ]);
                $user->save();
                Session::put('userid', $googleUser->getId());
                // Auth::login($user);
                return redirect('/admin');
            }
            else
            {
                // Auth::login($user);
                Session::put('userid', $googleUser->getId());
                Session::put('useremail', $googleUser->getId());
                return redirect('/admin');
            }

        } catch (\Throwable $th) {
            // return redirect()->back()->withErrors(['message' => 'Login failed. Please try again.']);
            throw $th;
        }
    }
}
