<style>

.navbar .nav-item .nav-link {
    padding: 0.35rem 0.6rem;
    border-radius: 0.5rem;
    transition: background-color .15s ease, box-shadow .15s ease, transform .12s ease;
    display: inline-flex;
    align-items: center;
    gap: .5rem;
}

.navbar .nav-item .nav-link:hover,
.navbar .nav-item .nav-link:focus {
    background-color: rgba(255, 255, 255, 0.12);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transform: translateY(-2px);
    text-decoration: none;
}


.navbar .nav-item .nav-link i {
    transition: transform .12s ease;
}
.navbar .nav-item .nav-link:hover i,
.navbar .nav-item .nav-link:focus i {
    transform: translateY(-2px);
}


@media (prefers-reduced-motion: reduce) {
    .navbar .nav-item .nav-link,
    .navbar .nav-item .nav-link i {
        transition: none !important;
        transform: none !important;
    }
}
</style>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand mr-4" href="#">
        <img src="https://team03.wi1cm.uni-trier.de/public/assets/images/WeLogo.svg" width="175" height="75" alt="Logo">
    </a>
    <ul class="navbar-nav flex-row">
        <li class="nav-item mx-3">
            <a class="nav-link" href="/tasks"><i class="fas fa-tasks"></i> Tasks</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link" href="#"><i class="fas fa-th-large"></i> Boards</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link" href="/spalten"><i class="fas fa-list"></i> Spalten</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link" href="/personen"><i class="fas fa-list"></i> Personen </a>
        </li>
    </ul>
</nav>