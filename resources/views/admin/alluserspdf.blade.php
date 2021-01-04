            <div class="card-body">
            <table class="table table-striped table-bordered">

    
                 <thead>
         <tr>
             <th>User Name</th>
             <th>Blood Group</th>
             <th>Phone No</th>
             <th>Email</th>
        </tr>
                 </thead>
    <tbody>
    
    @foreach($users as $users)
            <tr>
            <td align="center">{{ $users->name}}</td>
            <td align="center">{{ $users->blood_group}}</td>
            <td align="center">{{ $users->phone_number}}</td>
            <td align="center">{{ $users->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div> 
                </div>
            </div>
  

