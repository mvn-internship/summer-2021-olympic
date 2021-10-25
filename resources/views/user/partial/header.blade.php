<header class="site-navbar py-4" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="index.html">
                    <img src="user-common/images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="navheader site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="{{ route('user.home') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ route('user.schedule') }}" class="nav-link">Schedule & Results</a></li>
                        <li><a href="{{ route('rankings.index') }}" class="nav-link">Rankings</a></li>
                    </ul>
                </nav>
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>

</header>