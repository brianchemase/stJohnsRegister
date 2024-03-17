<div class="modal fade" id="RegisterStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('register.student') }}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Full names</label>
                        <input type="text" class="form-control" id="validationDefault01" name="full_names" placeholder="Enter full names" required>
                        <input type="hidden" class="form-control" id="validationDefault01" name="registered_by" value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">ID Number</label>
                        <input type="text" class="form-control" id="validationDefault02" name="national_id" placeholder="Enter student's National ID number" required>
                    </div>

                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="validationDefault02" name="phone" placeholder="Enter student's phone number" required>
                    </div>

                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="Enter email address" required>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <label for="validationDefault04" class="form-label">Gender</label>
                        <select class="form-select" id="validationDefault04" name="gender" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    													
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register Student</button>
    </form>
        </div>
    </div>
    </div>
</div>