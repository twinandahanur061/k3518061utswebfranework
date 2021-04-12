<div>
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img src="assets/img/cropped-Composed-Logo.png">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?= ($active === 'home') ? 'active' : ''; ?>" href="/" style="font-size: 20px;color: var(--bs-light);">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($active === 'profil') ? 'active' : ''; ?>" href="/pages/profil" style="font-size: 20px;color: var(--bs-white);">Profil</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($active === 'fasilitas') ? 'active' : ''; ?>" href="/pages/fasilitas" style="font-size: 20px;color: var(--bs-white);">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($active === 'galeri') ? 'active' : ''; ?>" href="/pages/galeri" style="font-size: 20px;color: var(--bs-white);">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($active === 'kontak') ? 'active' : ''; ?>" href="/pages/kontak" style="font-size: 20px;color: var(--bs-white);">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>