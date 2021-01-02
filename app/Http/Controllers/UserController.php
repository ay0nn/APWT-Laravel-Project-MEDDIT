<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
     return view('/admin.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('user')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('phone_number', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('blood_group', 'like', '%'.$query.'%')
         ->orWhere('user_type', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orderBy('user_id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('user')
         ->orderBy('user_id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->phone_number.'</td>
         <td>'.$row->address.'</td>
         <td>'.$row->blood_group.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->user_type.'</td>
         <td>'.$row->email.'</td>
       
         <td>
                <a href="">Details</a> |
                <a href="">Delete</a> 
            </td>
                  
         
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
}
