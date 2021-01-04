<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Validator;
use Socialite;
use Auth;
use Hash;
use Str;

class LoginController extends Controller
{
    public function index(){
        return view('/login.index');
	}
	//Github Login
	public function loginwithgithub(){
		return Socialite::driver('github')->redirect();

	}

	public function gtredirect(){
		$user = Socialite::driver('github')->user();
		$user = UserModel::firstOrCreate([
			'email' => $user->email,
			

		],[	'name' => $user->name,
			'phone_number'=>'not set',
			'address'=>'not set',
			'profession'=>'not set',
			'blood_group'=>'not set',
			'user_type' => 'user',
			'password' => Hash::make(Str::random(15))
		]);
		Auth::login($user, true);
		return redirect('/admin.index');
		
	}

         public function verify(Request $req){

        	$validation = Validator::make($req->all(), [
    	 	'email' => 'required',
    		'password' => 'required|min:8'
		]);

    	if ($validation->fails())
    	{
    		return redirect()->route('login')->withErrors($validation)->withInput();
    	}
    	else{

        	$user = UserModel::where(['email'=>$req->email,'password'=>$req->password])->first();
       		$req->session()->put('user', $user);

            if (count((array)$user) > 0) 
            {
            	
            	if(strtolower($user->user_type) == 'admin'){
            		return redirect()->route('admin.index');
            	}

            	else if(strtolower($user->user_type) == 'user'){
                	return redirect()->route('dashboard');
            	}
            
        	}
        	else{
    			$req->session()->flash('msg', 'Invalid Username/Password');
    			return redirect()->route('login');
    		}
    	}	
    }
    public function logout(Request $req){
        $req->session()->flush();
    	return redirect()->route('login');
    }

    }

