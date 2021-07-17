<nav class="main-header navbar navbar-expand-md navbar-light navbar-white sticky-top">
    <div class="container-fluid">
        <a href="template/index3.html" class="navbar-brand">
            <img class="brand-image img-circle elevation-3 rounded shadow-none my-1" style="height: 50px" src="{{ asset('logo.png')}}" alt="profile_pribadi">
            <span class="brand-text fw-bold">e-QRHC</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-md-flex justify-content-md-end order-3 ml-auto" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('Landing') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">e-Kinerja</a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">e-development</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0">
                        <span class="dropdown-header p-0 m-2 fs-5">Pengaturan</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                            <i class="fas fa-sign-in-alt mr-2"></i> Masuk
                        </a>
                        <a href="" class="dropdown-item">
                            <i class="fas fa-keyboard mr-2"></i> Manajemen Data
                        </a>
                        <form action="" method="POST" class="dropdown-item p-0">
                            @csrf
                            <button class="dropdown-item btn-block text-danger">
                                <i class="nav-icon fas fa-power-off mr-2"></i> Keluar
                            </button>
                        </form>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Some action </a></li>
                    <li><a href="#" class="dropdown-item">Some other action</a></li>
    
                    <li class="dropdown-divider"></li>
    
                    <!-- Level two dropdown-->
                    <li class="dropdown-submenu dropdown-hover dropdown-left">
                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                        <li>
                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                        </li>
    
                        <!-- Level three dropdown-->
                        <li class="dropdown-submenu">
                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                            </ul>
                        </li>
                        <!-- End Level three -->
    
                        <li><a href="#" class="dropdown-item">level 2</a></li>
                        <li><a href="#" class="dropdown-item">level 2</a></li>
                        </ul>
                    </li>
                    <!-- End Level two -->
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>