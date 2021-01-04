
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>meddit</title>
       
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('/authentication/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('/authentication/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{asset('/authentication/css/custom.css')}}" rel="stylesheet">

    </head>
    <body id="">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <div class="h6 text-gray-50 mb-20">
               
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars m-0 p-0 mx-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                       <li class="nva-item mx-0 mx-lg-1"><butto class="btn btn-light btn-sm disabled"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Meddit</a></span></li>
                        <li class="nav-item mx-0 mx-lg-1"><span class="btn btn-success btn-sm disabled"><a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><i class="fa fa-user " aria-hidden="true"></i>Welcome-{{ Session::get('user')->name }}</a></span></li>
                        <li class="nav-item mx-0 mx-lg-1"><span class="btn btn-light btn-sm"><a href="{{ route('updf') }}" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><i class="fas fa-download"></i>Download Notice</a></span></li>
                        <li class="nav-item mx-0 mx-lg-1"><span class="btn btn-danger btn-sm"><a href="{{ route('logout') }}" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><i class="fas fa-sign-out-alt mr-1 pr-1"></i>Logout</a></span></li>
                    </ul>
                    </div>

                </div>
            </div>
        </nav>
       

        <div class="card-body">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body" aling="center">
                <div class="btn-group">
                   <button class="btn btn-success btn-lg"> <a href="{{ route('alluser')}}" font="bolder" class="container">User List</a></button>
                   <button class="btn btn-dark btn-lg">    <a href="{{ route('allposts')}}" font="bolder" class="container">All Post</a></button>
                   <button class="btn btn-warning btn-lg">    <a href="{{ route('allcomment')}}" font="bolder" class="container">All Comments</a></button>
                   <button class="btn btn-dark btn-lg">    <a href="{{ route('noticelist')}}" font="bolder" class="container">Notices</a></button>
                </div>
                </div>
            </div>       
        </div>       
    </div>
</div>

    
    <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
   
    
<footer class="site-footer" id="foot">
        <div class="copyright py-4 text-center">
            <div class="container"><h6>Copyright 
                <br>©Meddit Fall::2020-2021<br>
            APWT
            </br></h6></div>
        </div>
        </footer>
        
</html>
