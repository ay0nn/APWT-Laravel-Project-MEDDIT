<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Meddit</title>
        <link href="{{asset('/authentication/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('/authentication/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{asset('/authentication/css/custom.css')}}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Meddit</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars m-0 p-0 mx-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><i class="fa fa-user mr-1 pr-1" aria-hidden="true"></i>{{ Session::get('user')->name }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
               <!-- Body Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <br>
                <br>
                <form method="post" action="submit">
                @csrf
                      <div class="form-group">
                        <textarea id="w3review" name="notice" placeholder="notice" rows="4" cols="40">
                        </textarea>
                        @error('notice')	
								<span style="color: red">*{{ $message }}</span><br><br>
						@enderror
                      </div>
                    <button type="submit" class="btn btn-success">Submit</button>

                    @if (Session::has('re-msg'))
							<br><br>
							<div>
								<span class="alert alert-danger" style="margin-left: 9%">{{ session('re-msg') }}</span>
							</div>
					@endif
                  </form>
                <!-- ---------------Body start---------------- -->


                <!-- ---------------Body End---------------- -->
            </div>
        </section>
        <footer class="site-footer" id="foot">
        <div class="copyright py-4 text-center">
            <div class="container"><h6>Copyright 
                <br>©Meddit Fall::2020-2021<br>
            APWT
            </br></h6></div>
        </div>
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
       
    </body>
  
</html>
