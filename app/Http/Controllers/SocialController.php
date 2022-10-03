<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    //login with facebook
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('facebook_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('influencer\create');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            Auth::login($new_user);
            return redirect('influencer\create');
        }
    }


    // login with google
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle(){
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('influencer\create');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->google_id = $user->id;
        $new_user->role= "user";
            $new_user->password = bcrypt('123456');
            // dd($new_user);
            $new_user->save();
            Auth::login($new_user);
            return redirect('influencer\create');
        }
    }

    // login with github
    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGithub(){
        $user = Socialite::driver('github')->stateless()->user();
        $findUser = User::where('github_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('influencer\create');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->github_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            Auth::login($new_user);
            return redirect('influencer\create');
        }
    }
}
