<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                        class="logo-txt">MultiAuth</span>
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                        class="logo-txt">MultiAuth</span>
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>
    </div>

    <div class="d-flex">


        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item bg-soft-light border-start border-end"
                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </form>
            </div>
        </div>

    </div>
</div>