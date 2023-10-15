<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <img src="{{ URL('image/buet.png') }}" alt="">
        <img src="{{ URL('image/mujiblogo.png') }}" alt="">
        <a class="navbar-brand" href="#"style="font-weight: bold;">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="#"style="font-weight: bold;">Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"style="font-weight: bold;">Faculty Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"style="font-weight: bold;">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"style="font-weight: bold;">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"style="font-weight: bold;">Notices</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

</nav>
<div class="body">
    <div class="navbar2">
        <a href="{{ '/about' }}">About</a>
        <a href="{{ '/news' }}">News & Event </a>
        <a href="{{ '/academics' }}">Academics</a>
        <a href="{{ '/research' }}">Research</a>
        <a href="{{ '/ugadmission' }}">UG Admission</a>
        <a href="{{ '/pgadmission' }}">PG Admission</a>
        <a href="{{ '/jobaplication' }}">Job Aplication</a>
    </div>
</div>
