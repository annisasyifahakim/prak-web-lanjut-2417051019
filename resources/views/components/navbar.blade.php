<nav class="navbar navbar-expand-lg navbar-dark navbar-formal border-bottom border-secondary border-opacity-25 py-2">
    <div class="container">
        <a class="navbar-brand fw-bold text-white fs-6" href="{{ route('user.index') }}">
            Sistem Management User
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link px-3 py-1 {{ request()->is('users*') ? 'active fw-semibold border-bottom border-2 border-primary' : '' }}" href="{{ route('user.index') }}">
                        Daftar User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-1 {{ request()->is('matakuliah*') ? 'active fw-semibold border-bottom border-2 border-primary' : '' }}" href="{{ url('/matakuliah') }}">
                        Mata Kuliah
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>