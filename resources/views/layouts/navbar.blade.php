<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('index') }}" class="nav-link">Home</a>
            </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            {{-- <form class="form-inline mr-2">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> --}}
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Universitas Siliwangi</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat col-12" onclick="
                            event.preventDefault();
                            document.getElementById('formLogout').submit();
                            ">
                            Sign out
                        </a>
                        <form id="formLogout" action="{{ route('logout') }}" method="POST">@csrf</form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>