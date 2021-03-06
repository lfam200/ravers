<?php

namespace Ravers\Http\Controllers\Auth;

use Ravers\User;
use Validator;
use Ravers\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\View;

use Auth;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected $redirectPath = '/home';
 
    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::with('twitter')->redirect();
    }

    public function redirectToProviderFb()
    {
        return Socialite::with('facebook')->redirect();
    }
 
    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $twitterUser = Socialite::with('twitter')->user();
        $user = User::whereName($twitterUser->getName())->first();
        
        // dd($user);
        if(!$user){
            // echo "no user";
            $user = new User;
            $user->name = $twitterUser->getName();
            $user->handle = $twitterUser->getNickname();
            // $user->avatar = $twitterUser->getAvataroriginal();
            $user->save();
            // echo "user created";
            Auth::loginUsingId($user->id);

            $login = Auth::user()->name;
            $id = Auth::user()->id;
            $title = 'Registro';
            return View::make('registro',['title' => $title, 'user' => $login, 'id' => $id]);
        }else{
             Auth::login($user,true);
             $login = Auth::user()->name;
             $title = 'Bienvenido';
            return View::make('bienvenido',['title' => $title, 'user' => $login]);
        }
       

       // dd($user);
    }

    public function handleProviderCallbackFb()
    {
        $facebookUser = Socialite::with('facebook')->user();
        $user = User::whereEmail($facebookUser->getEmail())->first();
        
        // dd($user);
        if(!$user){
            // echo "no user";
            $user = new User;
            $user->name = $facebookUser->getName();
            $user->handle = $facebookUser->getName();
            $user->email = $facebookUser->getEmail();
            // $user->avatar = $facebookUser->getAvataroriginal();
            $user->save();
          
        }    
        
            Auth::login($user,true);
             $login = Auth::user()->name;
             $title = 'Bienvenido';
            return View::make('bienvenido',['title' => $title, 'user' => $login]);
       

       // dd($user);
    }

}
