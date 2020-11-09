<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\{User, Faculty, Department};
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'name' => ['required|string|max:255'],
            'nim' => ['required|string|max:25'],
            'password' => ['required|string|min:8|confirmed'],
        ]);
    }

    public function index(){
        $faculties = Faculty::select("id","code","name")->orderBy('code')->get();

        return view('auth/register', compact(['faculties']));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        Validator::make($data->all(), [
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:25',
            'password' => 'required|string|min:8',
            'birthdate' => 'required|string',
            'faculty' => 'required',
            'department' => 'required',
            'years' => 'required|number',
            'city' => 'required|string',
        ]);

        try {
            $user = User::create([
                'name' => $data['name'],
                'nim' => $data['nim'],
                'password' => Hash::make($data['password']),
                'birthdate' => $data['birthdate'],
                'departmentId' => $data['department'],
                'years' => $data['years'],
                'city' => $data['city'],
            ]);

            Session::flash('success','Registration Success');
            return redirect('login');
        } catch (Exception $exception) {
            Session::flash('failed','Registration Failed : '.$exception->getMessage());
            return redirect('register');
        }
    }

    public function getDept($id){
        $department = Department::where("facultyId",$id)->select("degreeId","name","id")->orderBy("name")->with("degree:id,name")->get();
        return json_encode($department);
    }
}
