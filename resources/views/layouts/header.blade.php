<div class="row header mb-4">
    <div class="col-12">
        <div class="p-2 bg-primary d-flex justify-content-between align-items-center rounded">
            <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                <i class="feather-menu text-light" style="font-size: 2em;"></i>
            </button>
            <form action="" method="post" class="d-none d-md-block">
                <div class="form-inline">
                    <input type="text" class="form-control mr-2" placeholder="Search Everything">
                    <button class="btn btn-light">
                        <i class="feather-search text-primary"></i>
                    </button>
                </div>
            </form>
            <div class="dropdown">
                <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ isset(Auth::user()->photo)? asset('storage/profile/'.Auth::user()->photo): asset('dashboard/img/user.png') }}" class="user-img shadow-sm mr-0 mr-md-2" alt="">
                    <span class="d-none d-md-inline-block">{{ Auth::user()->name }}</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('profile.change-password') }}">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
