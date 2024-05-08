<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callBack(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/loginpage')->with('error', 'Google authentication failed.');
        }
        $existingUser = User::where('email', $googleUser->email)->first();
        if ($existingUser) {
            auth()->login($existingUser);
//            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            $user = new User();
            $user->name = $googleUser->name;
            $user->email = $googleUser->email;
            $user->save();
            auth()->login($user);

            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }

    public function linkedinLogin()
    {
//        $a= Socialite::driver('linkedin')->redirect();
//        dd ($a);
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedinCallBack()
    {
        try {

            $user = Socialite::driver('linkedin')->user();

            dd($user);
//            $linkedinUser = User::where('oauth_id', $user->id)->first();
//            dd($linkedinUser);
//            $user = Socialite::driver('linkedin')->user();
//
//            $linkedinUser = User::where('oauth_id', $user->id)->first();
//
//            if($linkedinUser){
//
//                Auth::login($linkedinUser);
//
//                return redirect('/dashboard');
//
//            }else{
//                $user = User::create([
//                    'name' => $user->name,
//                    'email' => $user->email,
//                    'oauth_id' => $user->id,
//                    'oauth_type' => 'linkedin',
//                    'password' => encrypt('admin12345')
//                ]);
//
//                Auth::login($user);
//
//                return redirect('/dashboard');
//            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }


    }

    public function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallBack(Request $request)
    {
        try {
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            return redirect('/loginpage')->with('error', 'Github authentication failed.');
        }
        $existingUser = User::where('email', $githubUser->email)->first();
        if ($existingUser) {
            auth()->login($existingUser);
            return redirect()->intended('dashboard');
        } else {
            $user = new User();
            $user->name = $githubUser->name;
            $user->email = $githubUser->email;
            $user->save();
            auth()->login($user);

            return redirect()->intended('dashboard');
        }
    }

    public function appleCallBack(Request $request)
    {

        $idToken = json_decode($request->detailData, true)['authorization']['id_token'];
        $userData = json_decode($request->detailData, true)['user'] ?? null;
        $tokenParts = explode('.', $idToken);
        $decodedPayload = base64_decode($tokenParts[1]);
        $payloadData = json_decode($decodedPayload, true);
        $payloadDataSub = $payloadData['sub'];

        $existingUser = User::where('apple_sub', $payloadDataSub)->first();

        if ($userData != null) {
            $user = new User();
            $user->name = $userData['name']['firstName'] . '' . $userData['name']['lastName'];
            $user->email = $userData['email'];
            $user->apple_sub = $payloadDataSub;
            $user->save();
            auth()->login($user);
            return redirect()->intended('dashboard');
        } elseif ($existingUser) {
            auth()->login($existingUser);
            return redirect()->intended('dashboard');
        } elseif (!$existingUser) {
            $user = new User();
            $user->apple_sub = $payloadDataSub;
            $user->save();
            auth()->login($user);
            return redirect()->intended('dashboard');
        }
        dd($request);

        dd($userData);

        dd($payloadDataSub);
    }
}
