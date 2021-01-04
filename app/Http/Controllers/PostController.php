<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index()
    {
     return view('/admin.allposts');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('post')
         ->where('post_id', 'like', '%'.$query.'%')
         ->orWhere('post_content', 'like', '%'.$query.'%')
         ->orWhere('post_by', 'like', '%'.$query.'%')
         ->orderBy('post_id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('post')
         ->orderBy('post_id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td align="center" >'.$row->post_id.'</td>
         <td align="center" >'.$row->post_content.'</td>
         <td align="center" >'.$row->post_by.'</td>
     
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    ///Guzlle 

    public function postNode(Request $req){
      $client = new \GuzzleHttp\Client();
    $request = $client->get('http://localhost:3001/admin/postlist}');
    $data =json_decode($request->getBody(),true);
    return view('admin.postfrmNode')->with('postNode', $data);
    
    }
  }
    
