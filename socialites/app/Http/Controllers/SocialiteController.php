<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Facebook;
use App\Socialiteuser;
use Illuminate\Support\Facades\Auth;
use App\Twitter;
use Socialite;
use DB;
use Illuminate\Support\Facades\Hash;


use Symfony\Component\Routing\RequestContextAwareInterface;

class SocialiteController extends Controller
{


    //google authentication
    public function redirectToProviderGoogle(Request $request)
    {
        $temp = $request->get('number');
        $sessionName='login';
        $sessionName = $temp;
        session(['key'=>$sessionName]);
        $tempvalue = (session('key'));
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle()
    {
        if (session('key'))
        {
            $user = Socialite::driver('google')->user();
            $authUser = $this->findOrCreateUserGoogle($user);
            Auth::login($authUser, true);
            $users=DB::table('socialiteusers')->get();
            return view('/home', compact('users'));
        }
        else
        {
            $user = Socialite::driver('google')->user();
            $authUser = $this->findOrCreateUserGoogle($user);
            echo "You have succesfully signed up with google";
        }
    }

    public function findOrCreateUserGoogle($googleUser)
    {
        $authUser = Socialiteuser::where('socialite_id', $googleUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        {
            $userData = new Socialiteuser();
            $userData['socialite_id']  = $googleUser->id;
            $userData['name']  = $googleUser->name;
            $userData['email']  = $googleUser->email;
            $userData['avatar']  = $googleUser->avatar;
            $userData['status']  = 1 ;
            $userData['password']  = Hash::make(rand(100000, 999999));
            $userData->save();
        }
    }



    // for facebook
    public function redirectToProviderFacebook(Request $request)
    {

        $temp = $request->get('number');
        $sessionName='login';
        $sessionName = $temp;
        session(['key'=>$sessionName]);
        $tempvalue = (session('key'));
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallbackFacebook()
    {
        if(session('key'))
        {
            $user = Socialite::driver('facebook')->user();
            $authUser = $this->findOrCreateUserFacebook($user);
            Auth::login($authUser, true);
            $users=DB::table('socialiteusers')->get();
            return view('/home', compact('users'));
        }
        else
        {
            $user = Socialite::driver('facebook')->user();
            $authUser = $this->findOrCreateUserFacebook($user);
            echo "you have succesfully signed up using facebook";
        }
    }


    public function findOrCreateUserFacebook($facebookUser){

        $authUser = Socialiteuser::where('socialite_id', $facebookUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        {
            $userData = new Socialiteuser();
            $userData['socialite_id'] = $facebookUser['id'];
            $userData['name'] = $facebookUser['name'];
            $userData['email'] = $facebookUser['email'];
            $userData['avatar'] = $facebookUser->avatar_original;
            $userData['status'] = 2;
            $userData['password'] = Hash::make(rand(100000, 999999));
            $userData->save();
        }
    }




//for twitter
    public function redirectToProvider(Request $request)
    {
        $temp = $request->get('number');
        $sessionName='login';
        $sessionName = $temp;
        session(['key'=>$sessionName]);
        $tempvalue = (session('key'));
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback()
    {
        if(session('key'))
        {
            $user = Socialite::driver('twitter')->user();
            $authUser = $this->findOrCreateUser($user);
            Auth::login($authUser, true);
            $users=DB::table('socialiteusers')->get();
            return view('/home', compact('users'));
        }
        else
        {
            $user = Socialite::driver('twitter')->user();
            $authUser = $this->findOrCreateUser($user);
            echo "you  have signed  up with twitter ";
        }
    }
    private function findOrCreateUser($twitterUser)
    {
        $authUser = Socialiteuser::where('socialite_id', $twitterUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        {
            $userData = new Socialiteuser();
            $userData['socialite_id'] = $twitterUser->id;
            $userData['name'] = $twitterUser->name;
            $userData['user_name'] = $twitterUser->nickname;
            $userData['avatar'] = $twitterUser->avatar_original;
            $userData['status'] = 3;
            $userData['password'] = Hash::make(rand(100000, 999999));
            $userData->save();
        }

    }




    //linkedin authentication
      public function redirectToProviderLinkedin(Request $request)
      {
          $temp = $request->get('number');
          $sessionName='login';
          $sessionName = $temp;
          session(['key'=>$sessionName]);
          $tempvalue = (session('key'));
          return Socialite::driver('linkedin')->redirect();
      }
      public function handleProviderCallbackLinkedin()
      {
          if(session('key'))
          {
              $user = Socialite::driver('linkedin')->user();
              $authUser = $this->findOrCreateUserLinkedin($user);
              Auth::login($authUser, true);
              $users=DB::table('socialiteusers')->get();
              return view('/home', compact('users'));
          }
          else
          {
              $user = Socialite::driver('linkedin')->user();
              $authUser = $this->findOrCreateUserLinkedin($user);
              echo "you have succesfully signed up using linked in ";
          }
      }
      public  function findOrCreateUserLinkedin($linkedinUser)
      {
          $authUser = Socialiteuser::where('socialite_id', $linkedinUser->id)->first();
          if ($authUser) {
              return $authUser;
          }
          {
              $userData = new Socialiteuser();
              $userData['socialite_id'] = $linkedinUser['id'];
              $userData['name'] = $linkedinUser->name;
              $userData['email'] = $linkedinUser->email;
              $userData['avatar'] = $linkedinUser->avatar_original;
              $userData['status'] = 4;
              $userData['password'] = Hash::make(rand(100000, 999999));
              $userData->save();
          }
      }


    //github authentication
    public function redirectToProviderGithub(Request $request)
    {
        $temp = $request->get('number');
        $sessionName='login';
        $sessionName = $temp;
        session(['key'=>$sessionName]);
        $tempvalue = (session('key'));
        return Socialite::driver('github')->redirect();
    }
    public  function handleProviderCallbackGithub()
    {
        if(session('key'))
        {
            $user = Socialite::driver('github')->user();
            $authUser = $this->findOrCreateUserGithub($user);
            Auth::login($authUser, true);
            $users=DB::table('socialiteusers')->get();
            return view('/home', compact('users'));
        }
        else{
            $user = Socialite::driver('github')->user();
            $authUser = $this->findOrCreateUserGithub($user);
            echo "you have sucessfully signed up using github";
        }
    }
    public function findOrCreateUserGithub($githubUser)
    {
        $authUser = Socialiteuser::where('socialite_id', $githubUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        {
            $userData = new Socialiteuser();
            $userData['socialite_id'] = $githubUser->id;
            $userData['name'] = $githubUser->name;
            $userData['user_name'] = $githubUser->nickname;
            $userData['email'] = $githubUser->email;
            $userData['avatar'] = $githubUser->avatar;
            $userData['status'] = 5;
            $userData['password'] = Hash::make(rand(100000, 999999));
            $userData->save();
        }
    }


}