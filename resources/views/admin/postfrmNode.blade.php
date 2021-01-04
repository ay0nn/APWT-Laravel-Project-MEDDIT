<!DOCTYPE html>
<html>
 <head>
  <title>Meddit|Posts</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="{{asset('/authentication/css/custom.css')}}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">All Posts</h3><br />
   <div class="panel panel-default">
    <div class="panel-body">
                <table class="table table-striped table-bordered" border="1" width="100%" colspan="5">
                    <thead>
                        <tr>
                            <th style="color:red">Post Id</th>
                            <th style="color:red">Post Content</th>
                            <th style="color:red">Post from User Id </th>
                            <th style="color:red">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        
		@for($i=0; $i < count($postNode); $i++)
		<tr>
			<td align="Center">{{$postNode[$i]['post_id']}}</td>
            <td align="Center">{{$postNode[$i]['post_content']}}</td>
            <td align="Center">{{$postNode[$i]['post_by']}}</td>
          
		</tr>
		@endfor
                </table>
               </div>
            </div>
        </section>
        <!-- Footer-->
     
    </body>
</html>