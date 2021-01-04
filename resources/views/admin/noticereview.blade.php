<!DOCTYPE html>
<html>
 <head>
  <title>Meddit|Notices</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="{{asset('/authentication/css/custom.css')}}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br />
  <div class="container box">
  <button class="btn btn sm light"> <a class="navbar-brand js-scroll-trigger" href="{{ route('admin.index')}}">Meddit</a></button>
   <h3 align="center">All Notices</h3><br />
   <div class="panel panel-default">
    <div class="panel-body">
                <table class="table table-striped table-bordered" border="1" width="100%" align="center">
                    <thead>
                        <tr>
                            <th style="color:red">Notice Id</th>
                            <th style="color:red">Notice Text</th>
                            <th style="color:red">Posted Date</th>
                            <th style="color:red">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        
		@for($i=0; $i < count($noticereviews); $i++)
		<tr>
			<td align ="center">{{$noticereviews[$i]['nid']}}</td>
            <td align ="center">{{$noticereviews[$i]['notice']}}</td>
            <td align ="center">{{$noticereviews[$i]['date']}}</td>
            <td align ="center">
            <a href="{{route('notice.delete',$noticereviews[$i]['nid'])}}">Delete</a>
            </td>
			
		</tr>
		@endfor
                </table>
               </div>
            </div>
        </section>
        <!-- Footer-->
     
    </body>
</html>