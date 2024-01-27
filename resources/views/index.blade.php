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

    <title>ST Johns Register</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <div style="text-align: center;">
                <img src="{{ asset('assets/images/stjohn.jpg') }}" alt="Logo">
        
                <h3>Welcome to ST Johns Ambulance HQ</h3>
            </div>
            <h2>Kindly feel in your details bellow</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="mb-5" method="post" action="{{ route('submit-form') }}" autocomplete="off">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">National ID *</label>
                  <input type="text" class="form-control" name="idno" id="nationalID" placeholder="Your National ID Number" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your names" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Phone *</label>
                  <input type="number" class="form-control" name="phone" id="phone"  placeholder="Your phone (07XXXXXXXX)" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email (optional)</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email" required>
                </div>
              </div>

              <div class="row">
                
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Purpose</label>
                  <select class="custom-select" id="purpose" name="purpose" required>
                    <option selected>Choose...</option>
                    <option value="Uniform Purchase">Uniform Purchase</option>
                    <option value="Interview">Interview</option>
                    <option value="Lessons">Lessons</option>
                    <option value="Official">Official Visit</option>
                   
                </select>
                </div>
              </div>

           
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Register" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

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