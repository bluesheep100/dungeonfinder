<nav class="navbar navbar-expand-md bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">DungeonFinder</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ route('admin') }}" class="nav-link link-info">Admin</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-inline-block me-md-2" action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link link-danger">
                                Log out
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>

            <div class="d-flex flex-column gap-2">
                <form class="d-flex" method="get" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
