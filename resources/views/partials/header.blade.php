<div class="pb-5">
    <div class="pb-4">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 position-fixed w-100">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('comics.index') }}">Comics DB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'comics.index' ? 'active' : '' }}"
                                href="{{ route('comics.index') }}">Comics List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'comics.create' ? 'active' : '' }}"
                                href="{{ route('comics.create') }}">
                                New Comic</a>
                        </li>

                    </ul>
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search for a comic"
                            aria-label="Search" name="searchedComic">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
