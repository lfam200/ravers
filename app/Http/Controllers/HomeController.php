<?php


namespace Ravers\Http\Controllers;

use Illuminate\Support\Facades\View;
use Ravers\User;
use Ravers\Http\Requests;
use Illuminate\Http\Request;
use Ravers\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function home()
    {
        $title = "Home";
        return View::make('home', ['title' => $title]);
    }

    public function whywater()
    {
        $title = "Why Water";
        return View::make('water', ['title' => $title]);
    }

    public function whyravers()
    {
        $title = "Why Ravers";
        return View::make('ravers', ['title' => $title]);
    }

    public function programs()
    {
        $title = "Programs";
        return View::make('programs', ['title' => $title]);
    }

    public function djbirthdays()
    {
        $title = "DJs Birthdays";
        return View::make('dj', ['title' => $title]);
    }

    public function aboutus()
    {
        $title = "About Us";
        return View::make('about', ['title' => $title]);
    }

    public function blog()
    {
        $title = "Blog";
        return View::make('blog', ['title' => $title]);
    }

    public function contact()
    {
        $title = "Contact Us";
        return View::make('contact', ['title' => $title]);
    }

    public function volunteers()
    {
        $title = "Volunteers";
        return View::make('volunteers', ['title' => $title]);
    }

    public function donate()
    {
        $title = "Donate";
        $message = "";
        return View::make('donate', ['title' => $title, 'message' => $message]);
    }


    public function donate_post()
    {
        $token = Input::get('stripeToken');
        $amount = Input::get('amount');
        $user = new User();


        try {

            $user->charge($amount, ['source' => $token,]);
        } catch (Stripe_CardError $e) {
            dd($e);
        }

        dd($user);

//    Auth::user()->subscription('monthly')->create($token);

//    return 'Done';
        $title = "Donate";

//        $message = "Transaccion realizada";
        return View::make('donate', ['title' => $title]);

    }

    public function policy()
    {
        $title = "Privacy Policy";
        return View::make('policy', ['title' => $title]);
    }

    public function terms()
    {
        $title = "Terms of Use";
        return View::make('terms', ['title' => $title]);
    }

    /**
     * @param Request $request
     * @return mixed
     */


    public function task(Request $request)
    {
        $email = $request->input('email');
        $id = $request->input('id');

        $user = User::whereId($id)->first();

        $user->email = $email;

        $user->save();

        $login = $request->input('name');

        $title = 'Bienvenido';

        return View::make('bienvenido', ['title' => $title, 'user' => $login]);
    }

    public function volunt(Request $request)
    {
        $email = $request->input('pEmail');
        $name = $request->input('inputName');
        $birthday = $request->input('inputBirthday');

        $user = User::whereEmail($email)->first();
        
        if(!$user){
            $user = new User;

            $user->email = $email;
            $user->name = $name;
            $user->birthday = $birthday;

            $user->save();
        }

        

        $title = 'Bienvenido';

        return View::make('bienvenido', ['title' => $title, 'user' => $name]);
    }

}