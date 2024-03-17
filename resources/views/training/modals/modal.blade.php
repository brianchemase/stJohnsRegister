<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>



<!-- view Modal -->
<div class="modal fade" id="viewAgentModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Showing Client no: {{$user->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4 class="text-center">Client number: {{$user->id}} </h4>
            <h5 >Name: {{$user->name}}</h5>
            
            <h5 >Phone: {{$user->phone}}</h5>
            <h5 >Email: {{$user->email}}</h5> 
            <h5 >Country: {{$user->country}}</h5> 
            <h5 >Position: {{$user->position}}</h5> 
            

                                                
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>


<!-- BEGIN edit user modal -->
<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form class="row g-3" action="{{ route('update_user') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="col-md-6">
                        <label for="editName" class="form-label">Names</label>
                        <input type="text" class="form-control" id="editName" name="name" placeholder="Enter Full Names" value="{{ $user->name }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="editEmail" name="email" placeholder="Enter Email" value="{{ $user->email }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="editPhone" name="phone" placeholder="Enter Phone" value="{{ $user->phone }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editposition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="editposition" name="position" placeholder="Enter Country" value="{{ $user->position }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editCountry" class="form-label">Country</label>
                        <input type="text" class="form-control" id="editCountry" name="country" placeholder="Enter Country" value="{{ $user->country }}" required>
                    </div>

                    

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END edit user modal -->




<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal{{$user->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password for {{$user->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('change_password', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" id="new_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password_confirmation">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Change Password Modal -->




