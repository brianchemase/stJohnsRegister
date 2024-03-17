<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('hometraining')}}">
            <img src="{{asset('logo/stjohn.jpg')}}" alt="Logo" width="140" height="60"><br>
            <span class="align-middle">ST John Ambulance</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item {{ Route::currentRouteName() === 'hometraining' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('hometraining')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>

            <li class="sidebar-header">
                Training tabs
            </li>

        

            <li class="sidebar-item">
                <a data-target="#training" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Training Functions</span>
                </a>
                <ul id="training" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('Studentstable')}}">Students Registration</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('StudentEnrolmenttab')}}">Student Enrolment </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('registerTrainingStations')}}">Training Station Registration </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('registerCourses')}}">Training Course Registration </a></li>
                    
                </ul>
            </li>


            <li class="sidebar-header">
                Certifications
            </li>

            <li class="sidebar-item {{ Route::currentRouteName() === 'CertificiedStudents' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('CertificiedStudents')}}">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Certified Students</span>
                </a>
            </li>




            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-invoice.html">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-tasks.html">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>
                    <span class="sidebar-badge badge bg-primary">Pro</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="calendar.html">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>
                    <span class="sidebar-badge badge bg-primary">Pro</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Tools & Components
            </li>
            <li class="sidebar-item">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-target="#icons" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                    <span class="sidebar-badge badge bg-light">1.500+</span>
                </a>
                <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="tables-bootstrap.html">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
                </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>
            <li class="sidebar-item">
                <a data-target="#form-plugins" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Form Plugins</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-inputs.html">Advanced Inputs <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-target="#datatables" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">DataTables</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.html">Responsive Table <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.html">Table with Buttons <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-column-search.html">Column Search <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-ajax.html">Ajax Sourced Data <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-target="#charts" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="notifications.html">
                    <i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>
                    <span class="sidebar-badge badge bg-primary">Pro</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-target="#maps" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li> --}}

            <li class="sidebar-item">
                <a data-target="#multi" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Multi Level</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-target="#multi-2" data-toggle="collapse" class="sidebar-link collapsed">Two Levels</a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-target="#multi-3" data-toggle="collapse" class="sidebar-link collapsed">Three Levels</a>
                        <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a data-target="#multi-3-1" data-toggle="collapse" class="sidebar-link collapsed">Item 1</a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 1</a>
                                        <a class="sidebar-link" href="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="align-middle" data-feather="power"></i>	{{ __('Signout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                </li>
        </ul>
    </div>
</nav>