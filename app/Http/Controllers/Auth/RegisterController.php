<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';
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
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'mobile'=> ['required', 'string','max:10'],
            'land'=> ['required', 'string','max:10'],
        ]);
        if($data['type']=='1'){
            $validator = Validator::make($data, [
                'company' => ['required'],
            ]);
        }
        return $validator;
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();

        try {
            $user= User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'user_type'=>$data['type'],
                'password' => Hash::make($data['password']),
                'mobile_no' =>$data['mobile'],
                'land_no' =>$data['land'],
            ]);
            if($data['type']=='1'){
                Vendor::create([
                    'name' => $data['name'],
                    'user_id' => $user->id,
                    'company_name'=>$data['company'],
                    'description'=>$data['description'],
                    'vendor_address'=>$data['address'],
                    'vendor_type'=>$data['vendor_type']
                ]);
            }

            DB::commit();    // Commiting  ==> There is no problem whatsoever
            return $user;

        } catch (\Exception $e) {
            DB::rollback();   // rollbacking  ==> Something went wrong
            
            return $e;
        }
        
    }
}