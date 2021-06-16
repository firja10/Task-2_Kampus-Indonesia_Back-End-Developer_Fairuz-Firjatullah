<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view('pages.auth.login');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }



// public function handleGoogleCallback()
// {

//     try {
//         $user = Socialite::driver('google')->user();

//         $finduser = User::where('google_id',$user->id)->first();

//         if($finduser){
//             Auth::login($finduser);
//             return redirect('/');
//         }
//         else {

//             $newUser = User::create([

//                 'name' => $user->name,

//                 'email' => $user->email,
//                 'google_id'=>$user->id,
//                 'password'=>bcrypt('12345678'),
//             ]);
//             Auth::login($newUser);

//             return redirect('/');
//         }

//     } catch (Exception $e) {
//         dd($e->getMessage());
//     }
// }





public function handleGoogleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
        }catch (Exception $e) {
            return redirect('auth/google');
        }

        $authUser = $this->CreateUser($user);
        Auth::login($authUser, true);
        // return redirect()->route('home');
        return redirect('home');
    }





    public function CreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;

        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'google_id'=>$user->id,
            'password'=>bcrypt('12345678'),
        ]);
    }





// protected function _registerOrLoginUser($data)
//     {
//         $user = User::where('email', '=', $data->email)->first();
//         if (!$user) {
//             $user = new User();
//             $user->name = $data->name;
//             $user->email = $data->email;
//             $user->google_id = $data->id;
//             $user->save();
//         }

//         Auth::login($user);
//     }





    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

    }







}
