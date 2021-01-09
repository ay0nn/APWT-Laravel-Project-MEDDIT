<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Validator;
use PDF;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    //admin add
    public function addadmin(){
        return view('admin.addadmin');
    }
  
    public function createadmin(Request $req){

        $validation = Validator::make($req->all(), [
            'name' => 'required',
            'phone_number' => 'required|min:11',
            'cc_no' => 'required|min:13',
            'address' => 'required',
            'profession' => 'required',
            'blood_group' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'

       ]);
       if ($validation->fails())
       {
           return redirect()->route('admin.add')->withErrors($validation)->withInput();
       }
       else{
        $user = new UserModel();
        $user->name            = $req->name;
        $user->phone_number    = $req->phone_number;
        $user->cc_no           = $req->cc_no;
        $user->address         = $req->address;
        $user->profession      = $req->profession;
        $user->blood_group     = $req->blood_group;
        $user->user_type       = 'admin';
        $user->email           = $req->email;
        $user->password        = $req->password;

        if($user->save()){
            return redirect()->route('admin.index');
        }else{
            return back();
        }
    }
}

    ///Notice
    public function noticelist(){
    $notices = NoticeModel::all();
        return view('admin.noticelist',['notices'=>$notices]);
    }
    public function noticeindex(){
        return view('admin.allnotices');
    }

    public function notice(){
        return view('admin.addnotice');
    }
    public function createNotice(Request $req){
        $validation = Validator::make($req->all(), [
            'notice' => 'required'
       ]);
       if ($validation->fails())
       {
           return redirect()->route('addnotice')->withErrors($validation)->withInput();
       }
       else{
        $notice= new NoticeModel();
        $notice->notice= $req->notice;
        $notice->save();
        return redirect()->back();
    }
}

   //Delete
 public function delete($id){
        
    $notices = NoticeModel::find($id);
    $notices->delete();

    //$request->session()->flash('success', "Deleted Succesfully!");
    return redirect()->back();
}
    public function updf(){
        $notices = NoticeModel::all();
        $pdf = PDF::loadView('admin.allnotices',['notices'=>$notices]);
        return $pdf->download('allnotices.pdf');
    }

   /* public function deleteall(Request $request){
        $nid = $request->get('ids');   
        $notices = NoticeModel::find($nid);
        $notices->delete();
    
        //$request->session()->flash('success', "Deleted Succesfully!");
        return redirect()->back();
    }*/
    

}
