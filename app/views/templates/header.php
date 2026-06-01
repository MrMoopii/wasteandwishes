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

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">
                    Waste <span class="text-waste">&</span> Wishes
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

                    <div class="navbar-nav text-end">
                        <?php if (!isset($_SESSION['login'])): ?>
                            <a class="btn btn-outline-light me-2" href="<?= BASEURL; ?>/auth">Masuk</a>
                            <a class="btn btn-waste" href="<?= BASEURL; ?>/auth/register">Daftar</a>

                        <?php else: ?>
                            <span class="navbar-text me-3 text-light">
                                Halo, <strong>
                                    <?= $_SESSION['username']; ?>
                                    </strong>
                                    <span class="badge bg-waste text-dark ms-1">
                                        <?= ucfirst($_SESSION['peran']); ?>
                                    </span>
                            </span>
                            <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/auth/logout">Keluar</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main-content"></div>