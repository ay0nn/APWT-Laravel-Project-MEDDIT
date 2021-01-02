<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('/login.index');
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

