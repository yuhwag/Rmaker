<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class AuthSocialController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle() {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            if (!$user) {
                // dd($google_user);
                $new_user = new User();
                $new_user->id = time();
                $new_user->firstname = $google_user->offsetGet('given_name');
                $new_user->lastname = $google_user->offsetGet('family_name');
                $new_user->level = "user";
                $new_user->email = $google_user->user['email'];
                $new_user->google_id = $google_user->user['sub'];
                $new_user->save();

                Auth::login($new_user);

                return redirect(route('home'));
            }
            else {
                Auth::login($user);
                
                return redirect(route('home'));
            }

        } catch (\Throwable $th) {
            dd('Something went wrong'. $th->getMessage());
        }
    }
}
