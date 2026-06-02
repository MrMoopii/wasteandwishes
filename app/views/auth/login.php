<div class="container d-flex align-items-center justify-content-center"
    style="min-height: 80vh; margin-top: 5rem; margin-bottom: 5rem;">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="width: 100%; max-width: 450px;">

        <div class="card-body">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark mb-1">Selamat Datang</h2>
                <p class="text-muted small">Silakan masuk ke akun <span class="text-waste fw-semibold">Waste &
                        Wishes</span> Anda</p>
                <div class="mx-auto bg-waste" style="width: 50px; height: 4px; border-radius: 10px;"></div>
            </div>

            <!-- Flasher Pesan -->
            <div class="my-3">
                <?php Flasher::flash(); ?>
            </div>

            <!-- Form Login -->
            <form action="<?= BASEURL; ?>/auth/prosesLogin" method="POST">

                <!-- Field Username -->
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold text-secondary">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted">👤</span>
                        <input type="text" class="form-control bg-light border-start-0 ps-0 py-2 fs-6" id="username"
                            name="username" placeholder="Masukkan username Anda" required autocomplete="off">
                    </div>
                </div>

                <!-- Field Password -->
                <!-- Field Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold text-secondary">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted">🔒</span>
                        <input type="password" class="form-control bg-light border-start-0 border-end-0 ps-0 py-2 fs-6"
                            id="password" name="password" placeholder="Masukkan password Anda" required>
                        <button class="btn btn-light border border-start-0 text-muted btn-toggle-password" type="button"
                            data-target="password">👁️</button>
                    </div>
                </div>

                <!-- Tombol Login -->
                <button type="submit" class="btn btn-waste btn-lg w-100 fw-bold py-2 shadow-sm mb-3">
                    Masuk Sekarang
                </button>

                <!-- Navigasi ke Daftar Akun -->
                <div class="text-center">
                    <p class="text-muted small mb-0">
                        Belum punya akun?
                        <a href="<?= BASEURL; ?>/auth/register"
                            class="text-waste fw-semibold text-decoration-none hover-link">
                            Daftar di sini
                        </a>
                    </p>
                </div>

            </form>

        </div>
    </div>
</div>