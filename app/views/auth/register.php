<div class="container d-flex align-items-center justify-content-center"
    style="min-height: 85vh; margin-top: 5rem; margin-bottom: 5rem;">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="width: 100%; max-width: 450px;">

        <div class="card-body">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark mb-1">Daftar Akun</h2>
                <p class="text-muted small">Bergabunglah dengan <span class="text-waste fw-semibold">Waste &
                        Wishes</span> untuk bumi lebih sehat</p>
                <div class="mx-auto bg-waste" style="width: 50px; height: 4px; border-radius: 10px;"></div>
            </div>

            <div class="my-3">
                <?php Flasher::flash(); ?>
            </div>

            <form action="<?= BASEURL; ?>/auth/prosesRegister" method="POST">

                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold text-secondary">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted">👤</span>
                        <input type="text" class="form-control bg-light border-start-0 ps-0 py-2 fs-6" id="username"
                            name="username" placeholder="Buat username unik" required autocomplete="off">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold text-secondary">Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted">✉️</span>
                        <input type="email" class="form-control bg-light border-start-0 ps-0 py-2 fs-6" id="email"
                            name="email" placeholder="Masukkan email aktif Anda" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold text-secondary">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0 text-muted">🔒</span>
                        <input type="password" class="form-control bg-light border-start-0 ps-0 py-2 fs-6" id="password"
                            name="password" placeholder="Buat password yang kuat" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-waste btn-lg w-100 fw-bold py-2 shadow-sm mb-3">
                    Daftar Sekarang
                </button>

                <div class="text-center">
                    <p class="text-muted small mb-0">
                        Sudah memiliki akun?
                        <a href="<?= BASEURL; ?>/auth" class="text-waste fw-semibold text-decoration-none hover-link">
                            Masuk di sini
                        </a>
                    </p>
                </div>

            </form>

        </div>
    </div>
</div>