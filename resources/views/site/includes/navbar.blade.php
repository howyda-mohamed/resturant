<nav class="navbar nav-first navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/imgs/navbar-brand.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-primary" href="#home">CALL US : <span class="pl-2 text-muted">(123) 456 7890</span></a>
            </li>
        </ul>
    </div>
</nav>
<nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Testmonials</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a>
                        @else
                            <a href="{{ route('login') }}"  class="btn btn-primary btn-sm">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth

                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
