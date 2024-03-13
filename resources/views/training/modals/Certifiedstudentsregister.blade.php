<div class="modal fade" id="RegisterStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certified Student Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('registerCertifiedStudent') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Full names</label>
                        <input type="text" class="form-control" id="validationDefault01" name="full_names" placeholder="Enter full names" required>
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
                        <label for="validationDefault02" class="form-label">Approval Date</label>
                        <input type="date" class="form-control" id="validationDefault02" name="approvaldate" placeholder="Enter student's approval date" max="{{ date('Y-m-d') }}" required>
                    </div>
                    

                    <div class="col-md-6">
                        <label for="validationDefault04" class="form-label">Course</label>
                        <select class="form-select" id="validationDefault04" name="course_id" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    													
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Award Certificate</button>
    </form>
        </div>
    </div>
    </div>
</div>