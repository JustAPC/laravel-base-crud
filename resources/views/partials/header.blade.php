<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Comics DB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::route()->getName() == 'comics.index' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::route()->getName() == 'comics.create' ? 'active' : '' }}"
                        href="{{ route('comics.create') }}">
                        New Comic</a>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search for a comic" aria-label="Search"
                    name="searchedComic">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
