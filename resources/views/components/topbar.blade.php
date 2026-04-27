{{-- resources/views/components/topbar.blade.php --}}
{{-- Digunakan sebagai <x-topbar :username="..." :pageTitle="..." /> --}}

@props(['username' => 'Guest', 'pageTitle' => 'Dashboard'])

<header class="topbar"> 
    <div class="d-flex align-items-center gap-3">
        {{-- Tombol mobile toggle --}}
        <button class="btn btn-sm btn-light mobile-toggle border"
                onclick="toggleSidebar()"
                aria-label="Toggle menu">
            <i class="bi bi-list fs-5"></i>
        </button>
        <h6 class="page-title">{{ $pageTitle }}</h6>
    </div>

    <div class="d-flex align-items-center gap-2">
        {{-- Notifikasi --}}
        <button class="btn btn-sm btn-light border position-relative me-1"
                aria-label="Notifikasi">
            <i class="bi bi-bell fs-6"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                  style="font-size:.6rem;">3</span>
        </button>

        {{-- User Badge --}}
        <div class="user-badge">
            <div class="avatar-sm">{{ strtoupper(substr($username, 0, 1)) }}</div>
            <span>{{ $username }}</span>
            <i class="bi bi-chevron-down" style="font-size:.7rem; color:#94A3B8;"></i>
        </div>
    </div>
</header>
