<!doctype html>
<!-- {{asset('assets/')}} -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>ST John Certificate Portal</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <div style="text-align: center;">
                <img src="{{ asset('assets/images/stjohn.jpg') }}" alt="Logo">
        
                <h3>Welcome to ST John Ambulance- Certificate Portal</h3>
            </div>
            <h2>Kindly key in your National ID</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


            <form class="mb-5" method="post" action="{{ route('generate-cert') }}" autocomplete="off">
              @csrf
              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="" class="col-form-label">National ID *</label>
                  <input type="text" class="form-control" name="idno" id="nationalID" placeholder="Your National ID Number" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Get Certificate" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
  </body>
</html>