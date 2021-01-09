<!DOCTYPE html>
<html>
 <head>
  <title>Meddit|Notices</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="{{asset('/authentication/css/custom.css')}}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
 </head>
 <body>
  <br />

  <div class="container box">
  <button class="btn btn-success btn sm"><a href="{{ route('addnotice')}}" font="bolder" class="container">Add Notices</a></button>
   <h3 align="center">All Notices</h3><br />
   <div class="panel panel-default">
    <div class="panel-body">
      @csrf
      <table class="table table-striped table-bordered">
        <thead>
        <tr>
       
         <th>Notce ID</th>
         <th>Notice Text</th>
         <th>Posted Date</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
       @foreach($notices as $notices)
            <tr>
            <td>{{ $notices->nid }} </td>
            <td>{{ $notices->notice }}</td>
            <td>{{ $notices->date}}</td>
          <td>
          <a href="{{route('notice.delete', $notices->nid)}}" class="btn btn-danger sm">Delete</a></td>  </tr>
            @endforeach
       </tbody>
      

      </table>
     </div>
    </div>    
   </div>
  </div>

