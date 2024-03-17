<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle d-flex">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
            <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
            </button>
        </div>
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
           
           
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                    <img src="{{asset('dash/img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark"> {{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#changepassModal"> <i class="align-middle mr-1" data-feather="key"></i>  Change password</a>
								<a class="dropdown-item" href="{{ route('users.index') }}"><i class="align-middle mr-1" data-feather="help-circle"></i> User Managment</a>
                    <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>



			<!-- Modal -->
            <div class="modal fade" id="changepassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> 
                            <form method="POST" action="{{ route('changeUsersPassword') }}">
                              @csrf
                                <div class="modal-body">
                                  <div class="form-group">
                                      <label for="new_password">New Password</label>
                                      <input type="hidden" name="usersid" value="{{ Auth::user()->id }}" >
                                      <input type="password" name="new_password" id="new_password" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="new_password_confirmation">Confirm New Password</label>
                                      <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                                  </div>
                             
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Change Password</button>
                              </div>
                          </form>
                    </div>
                    
                  </div>
                </div>
              </div>
              
              
              @if(session('passerror'))
                  <script>
                      alert("An error has happened!");
                  </script>
                      
              @endif
              
              @if(session('passsuccess'))
                  <script>
                      alert("Password updated successfully");
                  </script>
              @endif
              