<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeModel;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    ///Notice
    public function noticeindex(){
        return view('admin.allnotices');
    }


    public function notice(){
        return view('admin.addnotice');
    }
    public function createNotice(Request $req){
        $notice= new NoticeModel();
        $notice->notice= $req->notice;
       echo( $notice->save());
        return redirect()->back();
    }

   
    public function updf(){
        $notices = NoticeModel::all();
        $pdf = PDF::loadView('admin.allnotices',['notices'=>$notices]);
        return $pdf->download('allnotices.pdf');
    }
}
