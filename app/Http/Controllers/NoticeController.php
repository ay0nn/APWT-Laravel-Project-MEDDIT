<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeModel;
use Illuminate\Support\Facades\DB;
use PDF;


class NoticeController extends Controller
{   

    public function index(){
        return view('admin.allnotices');
    }


    public function Notice(){
        return view('admin.addnotice');
    }
    public function createNotice(Request $req){
        $notice= new notice;
        $notice->notice= $req->notice;
       echo( $notice->save());
        //return view('admin.addnotice');
    }

   
    public function updf(){
        $notices = NoticeModel::all();
        $pdf = PDF::loadView('admin.allnotices',['notices'=>$notices]);
        return $pdf->download('allnotices.pdf');
    }
    
}
