<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

        @if (Auth::user())
            <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Μενού</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        @endif

        <!-- Branding Image -->
            <a href="{{ url('/') }}">
                <img id="logo_image" align="left" src="/images/logos/cs_unipi_author_logo.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">
                CS Unipi Author
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if (Auth::user())
                <li><a href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i> Αρχική</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-tachometer" aria-hidden="true"></i> Πίνακας Ελέγχου <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/articles') }}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Άρθρα</a></li>
                                <li><a href="{{ url('/pages') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Σελίδες</a></li>
                                <li><a href="{{ url('/people') }}"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Άτομα</a></li>
                                <li><a href="{{ url('/pictures') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> Εικόνες</a></li>
                                {{--only for super admins--}}
                                @if(Auth::user() && Auth::user()->super_admin == 1)
                                    <hr id="dashboard_horizontal_rule">
{{--                                    <li><a href="{{ url('/menu') }}"><i class="fa fa-bars" aria-hidden="true"></i> Μενού</a></li>--}}
                                    <li><a href="{{ url('/users') }}"><i class="fa fa-users" aria-hidden="true"></i> Χρήστες</a></li>
                                @endif
                            </ul>

                        </li>

                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->

                @if (Auth::guest())
                <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Σύνδεση</a></li>
                @endif
                {{--@else--}}

                @if(Auth::user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user" aria-hidden="true"></i>Επεξεργασία Προφίλ</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Αποσύνδεση</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>