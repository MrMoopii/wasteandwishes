<div class="container langganan-section my-5 py-2">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="bg-blob"></div>

            <div class="card shadow-lg border-0 rounded-4 p-4 card-form position-relative">
                <div class="text-center mb-4">
                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold small mb-2">
                        <i class="bi bi-patch-check-fill me-1"></i> Waste & Wishes Premium
                    </span>
                    <h2 class="fw-bold text-dark mt-2 mb-1">Form Langganan</h2>
                    <p class="text-muted small">Lengkapi data di bawah untuk mulai berkontribusi pada kesehatan bumi.
                    </p>
                </div>

                <form action="<?= BASEURL; ?>/langganan/prosesTambah" method="POST">
                    <div class="mb-3 text-start">
                        <label for="nama_pelanggan" class="form-label fw-bold text-secondary small">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted"><i
                                    class="bi bi-person"></i></span>
                            <input type="text" class="form-control bg-light border-start-0 ps-1" id="nama_pelanggan"
                                name="nama_pelanggan" placeholder="Masukkan nama lengkap Anda" required autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-3 text-start">
                        <label for="alamat" class="form-label fw-bold text-secondary small">Alamat Rumah</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted"><i
                                    class="bi bi-geo-alt"></i></span>
                            <input type="text" class="form-control bg-light border-start-0 ps-1" id="alamat"
                                name="alamat" placeholder="Nama jalan, nomor rumah, RT/RW" required autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-4 text-start">
                        <label for="no_telp" class="form-label fw-bold text-secondary small">Nomor Telepon /
                            WhatsApp</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted"><i
                                    class="bi bi-telephone"></i></span>
                            <input type="tel" class="form-control bg-light border-start-0 ps-1" id="no_telp"
                                name="no_telp" placeholder="Contoh: 08123456789" required autocomplete="off">
                        </div>
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn w-100 py-2.5 rounded-pill fw-bold text-white shadow-sm"
                            style="background: linear-gradient(135deg, #0ea5e9 0%, #0d9488 100%) !important; color: #ffffff !important; border: none;">
                            <i class="bi bi-shield-check me-2"></i>Konfirmasi Pendaftaran
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>