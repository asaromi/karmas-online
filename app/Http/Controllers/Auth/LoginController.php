<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

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

    public function login(Request $request){
        $this->validate($request, [
            'nim' => 'required|string', //VALIDASI KOLOM USERNAME
            //TAPI KOLOM INI BISA BERISI EMAIL ATAU USERNAME
            'password' => 'required|string|min:6',
        ]);
    
        //TAMPUNG INFORMASI LOGINNYA, DIMANA KOLOM TYPE PERTAMA BERSIFAT DINAMIS BERDASARKAN VALUE DARI PENGECEKAN DIATAS
        $login = [
            'nim' => $request->nim,
            'password' => $request->password
        ];

        $user = User::where('nim', $login['nim'])->first();
        if($user) {
            $avatar = "storage/img/avatar/".$login['nim'];
            if(file_exists($avatar.'.jpg')){
                $avatar .= '.jpg';
                $user->update(['avatar' => $avatar]);
            } else if(file_exists($avatar.'.jpeg')){
                $avatar .= '.jpeg';
                $user->update(['avatar' => $avatar]);
            } else if(file_exists($avatar.'.png')){
                $avatar .= '.png';
                $user->update(['avatar' => $avatar]);
            }
        }

        // dd($login);
            //LAKUKAN LOGIN
        if (auth()->attempt($login)) {
            //JIKA BERHASIL, MAKA REDIRECT KE HALAMAN HOME
            return redirect()->route('home');
        } else if(!$user){
            return response("Mahasiswa tidak ada dalam database", 400);
        } else
            return response("Gagal Login", 400);
        
    }
}
