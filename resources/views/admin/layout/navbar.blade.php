<!-- Main navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars" style="color: black"></i>
    </button>

    <!-- Unified Search Form -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search w-100"
        method="GET" action="{{ route('admin.search') }}">
        <div class="input-group w-100">
            <input type="text" name="search" class="form-control bg-light border-0 small"
                placeholder="Search by id, name, subject, email, phone, date" aria-label="Search"
                aria-describedby="basic-addon2" value="{{ request()->query('search') }}">
            <div class="input-group-append">
                <button class="btn" type="submit" style="background-color: black; color:white">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Responsive Search Form (Dropdown) -->
    <form class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw" style="color: black"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search" method="GET" action="{{ route('admin.search') }}">
                <div class="input-group w-100">
                    <input type="text" name="search" class="form-control bg-light border-0 small"
                        placeholder="Search by id, name, subject, email, phone, date" aria-label="Search"
                        aria-describedby="basic-addon2" value="{{ request()->query('search') }}">
                    <div class="input-group-append">
                        <button class="btn" type="submit" style="background-color: black; color:white">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="list-group">
            <div class="d-flex align-items-center">
                <span class="mx-sm-3 mt-3 py-2 px-2 py-2 px-sm-2 px-md-4 text-white rounded" style="background: black;">
                    Administrator
                </span>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset(Auth::user()->profile_image) }}"
                    style="object-fit: cover;">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.setting') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
