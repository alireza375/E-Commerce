<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="mb-0 list-unstyled topnav-menu float-end">

            @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);

            @endphp

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}"
                        alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        {{ $adminData->name }} <i class="mdi mdi-chevron-down"></i>

                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                    <a href="{{route('admin.profile')}}" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>My Account </span>
                    </a>


                    <div class="dropdown-divider"></div>

                   <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="dropdown-item">
        Logout
    </button>
</form>


                </div>
            </li>



        </ul>

        <!-- LOGO -->
        <div class="logo-box">

            <div class="text-center logo logo-light">

                <span class="logo-lg">
                   <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/img/logo.jpg') }}" alt="" height="70"></a>
                </span>
            </div>
        </div>

    </div>
</div>

