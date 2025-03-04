    <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
            <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
        </svg>
        </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
            <li class="nav-item active">
            <a class="nav-link pl-3" href="{{ route('cv') }}"><span class="ml-1 item-text">CV</span></a>
            </li>
        </ul>
        </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>CV Options</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Edit CV</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('information.edit', Auth::user()->id) }}"><span class="ml-1 item-text">Basic Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('profile.edit', Auth::user()->id) }}"><span class="ml-1 item-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('skills.edit', Auth::user()->id) }}"><span class="ml-1 item-text">Skills</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('education.index') }}"><span class="ml-1 item-text">Education</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('languages.edit', Auth::user()->id) }}"><span class="ml-1 item-text">Languages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('images.edit', Auth::user()->id) }}"><span class="ml-1 item-text">Image</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
