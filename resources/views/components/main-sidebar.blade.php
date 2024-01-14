<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <img alt="" class="img-fluid mb-2" src="{{ asset('images/FOP5-logo-main.png') }}"
                    style="width: 100px;">
                <h5 class="text-white">NDUB Convocation</h5>
                <a class="" href="#"><b>{{ Auth::user()->name }} <br>
                        @php
                            use App\Models\User;
                            $user = User::where('id', Auth::user()->id)->first();
                            echo '<small></small>';
                        @endphp</b></a><br>
            </div>

        </div>

        <!-- Sidebar Menu -->

        <nav class="mt-2">


            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview"
                role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2' || Auth::user()->role_id == '3')
                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all_student') }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                All Students
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all_student') }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Add Student
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all_support_ticket') }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                All Support Tickets
                            </p>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == '3')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_support_ticket') }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Support
                            </p>
                        </a>
                    </li>
                @endif
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <!-- Authentication -->
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sign Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
