            <div class="card-body">
            <table class="table table-striped table-bordered">

    
                 <thead>
         <tr>
             <th>Notice ID</th>
             <th>Notice Text</th>
             <th>Posted Date</th>
        </tr>
                 </thead>
    <tbody>
    
    @foreach($notices as $notices)
            <tr>
            <td align="center" >{{ $notices->nid }}</td>
            <td align="center">{{ $notices->notice }}</td>
            <td align="center">{{ $notices->date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div> 
                </div>
            </div>
  

