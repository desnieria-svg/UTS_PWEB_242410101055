@props(['username' => null])

<nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg, #1b5e20, #2d6a2d);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="42">
            <span class="fw-bold text-white fs-5">SegarBuah</span>
        </a> 

        @if($username)
        <div class="d-flex gap-2 flex-wrap">
            <a href="/dashboard?username={{ urlencode($username) }}" class="btn btn-sm" style="background-color: #a5d6a7; color: #1b5e20; font-weight: 600;">Dashboard</a>
            <a href="/pengelolaan?username={{ urlencode($username) }}" class="btn btn-sm" style="background-color: #fff9c4; color: #f57f17; font-weight: 600;">Pengelolaan</a>
            <a href="/profile?username={{ urlencode($username) }}" class="btn btn-sm" style="background-color: #bbdefb; color: #0d47a1; font-weight: 600;">Profil</a>
            <a href="/logout" class="btn btn-sm" style="background-color: #ef9a9a; color: #b71c1c; font-weight: 600;">Keluar</a>
        </div>
        @endif
    </div>
</nav>
