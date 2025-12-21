

<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="mb-0 list-unstyled topnav-menu float-end">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                   data-bs-toggle="dropdown" href="#" role="button">

                    @php
                        $user = Auth::user();
                        $userData = $user
                            ? App\Models\User::where('id', $user->id)->first()
                            : null;
                    @endphp

                    <img src="{{ url('upload/no_image.jpg') }}"
                         alt="user-image" class="rounded-circle">

                    <span class="pro-user-name ms-1">
                        {{ $userData->name ?? 'User' }}
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                    <a href="" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="{{ route('user.logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
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
