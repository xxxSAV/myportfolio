<nav class="navbar navbar-expand-lg sticky-top" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 25px 20px -20px;">
    <div class="container">
        <a href="{{ route('home.index') }}">
            <img alt="logo" src="{{ asset('build/assets/image/logo.webp') }}" height="60" width="63">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcontent" aria-controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcontent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{ route('home.index') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{ route('projects.index') }}">
                        Projects
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{ route('about.index') }}">
                        About
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{ route('contact.index') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>