<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="Brian Anikayi">
	<meta name="keywords" content="Terra Moni">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('dash/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>STJohnKe || Training</title>

	<!-- <link href="css/app.css" rel="stylesheet"> -->
    <link href="{{asset('dash/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('dash/css/dash.css')}}" rel="stylesheet">
	<!-- BEGIN SETTINGS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


	<!-- BEGIN SETTINGS -->
	<!-- <script src="{{asset('dash/js/settings.js')}}"></script> -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
</head>

<body data-theme="light">
	<div class="wrapper">

        <!-- side bar start -->
              @include('training.inc.sidebar')
         <!-- side bar end -->

		<div class="main">

            <!-- top bar link -->

            @include('training.inc.header')
			
            <!-- end of top bar -->

            @yield('content')

			

            @include('training.inc.footer')
            
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('dash/js/app.js')}}"></script>
	<script src="{{asset('dash/js/datatables.js')}}"></script>
	<script type="text/javascript" src="auth/js/vanilla-tilt.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Choices.js
			new Choices(document.querySelector(".choices-single"));
			new Choices(document.querySelector(".choices-multiple"));
			// Flatpickr
			flatpickr(".flatpickr-minimum");
			flatpickr(".flatpickr-datetime", {
				enableTime: true,
				dateFormat: "Y-m-d H:i",
			});
			flatpickr(".flatpickr-human", {
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});
			flatpickr(".flatpickr-multiple", {
				mode: "multiple",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-range", {
				mode: "range",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-time", {
				enableTime: true,
				noCalendar: true,
				dateFormat: "H:i",
			});
		});
	</script>
	

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
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
	

</body>

</html>