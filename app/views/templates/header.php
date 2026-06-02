<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?> - Waste & Wishes</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3 text-decoration-none" href="<?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>/img/wasteandwishes_logo.png" alt="Waste & Wishes Logo"
                    style="height: 35px; width: auto;" class="d-inline-block">

                <span class="fs-4 fw-bold text-white mb-0" style="letter-spacing: 0.3px;">
                    Waste <span class="text-waste">&</span> Wishes
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($data['judul'] == 'Home') ? 'active' : ''; ?>"
                            href="<?= BASEURL; ?>">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($data['judul'] == 'Tentang Kami') ? 'active' : ''; ?>"
                            href="<?= BASEURL; ?>/about">Tentang Kami</a>
                    </li>

                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>

                        <?php if ($_SESSION['peran'] == 'user'): ?>
                            <li class="nav-item">
                                <a class="nav-link <?= ($data['judul'] == 'Berlangganan Sampah') ? 'active' : ''; ?>"
                                    href="<?= BASEURL; ?>/langganan">Berlangganan Sampah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($data['judul'] == 'Daftar Event') ? 'active' : ''; ?>"
                                    href="<?= BASEURL; ?>/event">Daftar Event</a>
                            </li>

                        <?php elseif ($_SESSION['peran'] == 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link <?= ($data['judul'] == 'Dashboard Admin') ? 'active' : ''; ?>"
                                    href="<?= BASEURL; ?>/admin">Dashboard Admin</a>
                            </li>
                        <?php endif; ?>

                    <?php endif; ?>
                </ul>

                <div class="navbar-nav align-items-center text-end">
                    <?php if (!isset($_SESSION['login'])): ?>
                        <a class="btn btn-outline-light me-2" href="<?= BASEURL; ?>/auth">Masuk</a>
                        <a class="btn btn-waste" href="<?= BASEURL; ?>/auth/register">Daftar</a>

                    <?php else: ?>
                        <div class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle d-flex align-items-center p-0" href="#" id="profilDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                style="border: none; background: transparent;">
                                <div class="bg-waste d-flex justify-content-center align-items-center rounded-circle border border-2 border-white shadow-sm"
                                    style="width: 40px; height: 40px; color: white; font-weight: bold; font-size: 18px;">
                                    <?= strtoupper(substr($_SESSION['username'], 0, 1)); ?>
                                </div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 position-absolute"
                                aria-labelledby="profilDropdown" style="min-width: 220px; border-radius: 12px;">

                                <li class="px-3 py-3 text-center"
                                    style="background-color: #f4fbfb; border-radius: 12px 12px 0 0; margin-top: -8px;">
                                    <span class="d-block fw-bold text-dark mb-1" style="font-size: 16px;">
                                        <?= $_SESSION['username']; ?>
                                    </span>

                                    <?php if ($_SESSION['peran'] == 'user'): ?>
                                        <span class="badge shadow-sm"
                                            style="background-color: #17AFB0; font-size: 11px; padding: 6px 10px;">
                                            <?= (isset($_SESSION['status_langganan']) && $_SESSION['status_langganan'] == true) ? '⭐ Langganan Aktif' : 'Belum Langganan'; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-dark text-white shadow-sm"
                                            style="font-size: 11px; padding: 6px 10px;">
                                            🛡️ Admin
                                        </span>
                                    <?php endif; ?>
                                </li>

                                <li>
                                    <hr class="dropdown-divider my-2">
                                </li>

                                <li><a class="dropdown-item fw-semibold text-secondary" href="#">Profil Saya</a></li>

                                <li>
                                    <hr class="dropdown-divider my-2">
                                </li>

                                <li>
                                    <a class="dropdown-item text-danger fw-bold py-2" href="<?= BASEURL; ?>/auth/logout">
                                        Keluar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content"></div>