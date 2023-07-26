<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/03/DC-Comics-Logo.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5" alt="d-inline-block align-text-top brand-logo me-5">
            <a class="navbar-brand me-5" href="#">
                Laravel DC Comics
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('guest.home') }}">
                        Homepage
                    </a>
                    <a class="nav-link" href="{{ route('guest.comics.index') }}">
                        Comics
                    </a>
                    <a class="nav-link" href="{{ route('admin.comics.index') }}">
                        Comics as Admin
                    </a>
                    <a class="nav-link" href="{{ route('admin.comics.create') }}">
                        Add new Comic
                    </a>
                    <a class="nav-link" href="{{ route('admin.comics.bin') }}">
                        Deleted Comics
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>