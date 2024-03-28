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

    <title>ST John Register</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <div style="text-align: center;">
                {{-- <img src="{{ asset('assets/images/stjohn.jpg') }}" alt="Logo"> --}}
                <img src="{{ asset('logo/StJohnCollegeLogo-03.png') }}" alt="Logo" width="250">
     
        
                <h3>Welcome to ST John Ambulance College</h3>
            </div>
            <h2>Kindly feel in your details bellow to enroll</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="mb-5" method="post" action="{{ route('storeEnrolmentForm') }}" autocomplete="off">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">National ID *</label>
                  <input type="text" class="form-control" name="idno" id="nationalID" placeholder="Your National ID Number" required>
                  <input type="hidden" name="account" id="account" value="">
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your official names" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Phone *</label>
                  <input type="number" class="form-control" name="phone" id="phone"  placeholder="Share your phone (07XXXXXXXX)" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Share Your email" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group mb-3">
                  <label for="budget" class="col-form-label">Gender</label>
                  <select class="custom-select" id="gender" name="gender" required>
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                  </select>
                </div>

                <div class="col-md-8 form-group mb-3">
                  <label for="budget" class="col-form-label">Select Course</label>
                  <select class="custom-select" id="course" name="course" required>
                    <option selected>Choose Course...</option>
                              @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }} - Duration: {{ $course->course_duration }} - Cost: {{ $course->course_cost }}</option>
                            @endforeach
                  </select>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="budget" class="col-form-label">Training Station</label>
                  <select class="custom-select" id="training_station" name="station" required>
                    <option selected>Choose training Location...</option>
                          @foreach($stations as $station)
                                <option value="{{ $station->station_name }}">{{ $station->station_name }}</option>
                            @endforeach
                  </select>
                </div>

                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Prefered Start Date</label>
                  <input type="date" class="form-control" name="startdate" id="startdate" min="{{ \Carbon\Carbon::now()->toDateString() }}"  required>
                </div>


                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Mode of Payment</label>
                  <select class="custom-select" id="payment" name="paymentmode" required>
                    <option selected>Choose...</option>
                    <option value="mpesa">Mpesa</option>
                    <option value="pesapal">Pesa Pal</option>
                    <option value="Cheque">Cheque</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

           
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Enroll" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script>
    function generateRandomString(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    document.addEventListener("DOMContentLoaded", function() {
        var randomString = generateRandomString(8);
        document.getElementById("account").value = randomString;
    });
</script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6605235da0c6737bd125d002/1hq2149j3';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

    

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
 

  </body>
</html>