<div class="modal fade" id="RegisterStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Enrolment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('storeEnrolmentForm') }}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Full names</label>
                        <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter full names" required>
                       
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">ID Number</label>
                        <input type="text" class="form-control" id="validationDefault02" name="idno" placeholder="Enter student's National ID number" required>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="validationDefault03" name="phone" placeholder="Enter student's phone number" required>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault04" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="validationDefault04" name="email" placeholder="Enter email address" required>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Gender</label>
                        <select class="form-select" id="validationDefault05" name="gender" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault06" class="form-label">Select Course</label>
                        <select class="form-select" id="validationDefault06" name="course" required>
                            <option selected disabled value="">Choose Course...</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }} - Duration: {{ $course->course_duration }} - Cost: {{ $course->course_cost }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault07" class="form-label">Training Station</label>
                        <select class="form-select" id="validationDefault07" name="station" required>
                            <option selected disabled value="">Choose training Location...</option>
                            @foreach($stations as $station)
                                <option value="{{ $station->station_name }}">{{ $station->station_name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="col-md-6">
                        <label for="validationDefault08" class="form-label">Prefered Start Date</label>
                        <input type="date" class="form-control" id="validationDefault08" name="startdate" min="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                    </div>
                
                    <div class="col-md-12">
                        <label for="validationDefault09" class="form-label">Mode of Payment</label>
                        <select class="form-select" id="validationDefault09" name="paymentmode" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="mpesa">Mpesa</option>
                            <option value="pesapal">Pesa Pal</option>
                            <option value="Cheque">Cheque</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                
                    <div class="col-12">
                        <input type="hidden" class="form-control" id="account" name="account">
                    </div>
                
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Enroll Student</button>
                    </div>
                </form>
                
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
                
        </div>
    </div>
    </div>
</div>