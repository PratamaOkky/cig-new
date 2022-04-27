<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        @if (auth()->user()->level_id == 1)
            <a href="{{ route('admin.dashboard') }}" class="gmn mt-1"><img src="/assets/images/logo/gmn.png"
                    width="55" height="75" class="py-2 me-2">Garda Mitra Nasional</a>
        @elseif (auth()->user()->level_id == 2)
            <a href="{{ route('user.dashboard') }}" class="gmn mt-1"><img src="/assets/images/logo/gmn.png"
                    width="55" height="75" class="py-2 me-2">Garda Mitra Nasional</a>
        @endif

        @if (auth()->user()->level_id == 1)
            <div class="me-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link active">Data Pegawai</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.artikel.index') }}" class="nav-link active">Artikel</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gaji
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.gaji.index') }}">Upload Gaji</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin.gaji.data') }}">Data Gaji</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.karir.index') }}" class="nav-link active">Karir</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.contact.index') }}" class="nav-link active">Kontak</a>
                    </li>

                    <li class="nav-item" style="list-style-type: none">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button class="btn logout">Keluar</button>
                        </form>
                    </li>
                @elseif (auth()->user()->level_id == 2)
                    <li class="nav-item" style="list-style-type: none">
                        <form method="POST" action="{{ route('user.logout') }}">
                            @csrf
                            <button class="btn logout">Keluar</button>
                        </form>
                    </li>
        @endif
        </ul>
    </div>
    </div>
</nav>
<div class="garis-nav"></div>
