<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-3 p-4">
                <div class="card-body text-center">
                    <h4 class="fw-bold text-dark mb-1">Pembayaran Perpanjangan</h4>
                    <p class="text-muted small">Layanan Langganan Pengelolaan Sampah Organik</p>

                    <div class="alert alert-info py-2 rounded-3 text-start small mb-4">
                        <strong>Info Pelanggan:</strong> <br>
                        Nama:
                        <?= $data['langganan']['nama_pelanggan']; ?> <br>
                        Masa Berlaku Saat Ini: <span class="text-danger fw-bold">
                            <?= date('d M Y', strtotime($data['langganan']['tanggal_berakhir'])); ?>
                        </span>
                    </div>

                    <div class="bg-light p-3 rounded-3 mb-4">
                        <span class="text-secondary small d-block">Total Tagihan</span>
                        <h2 class="fw-bold text-success m-0">Rp25.000</h2>
                    </div>

                    <p class="text-muted small mb-2">Silakan pindai kode QRIS di bawah ini:</p>
                    <div class="mb-4 p-2 border rounded-3 d-inline-block bg-white shadow-sm">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=WasteAndWishesPerpanjang"
                            alt="QRIS Waste & Wishes" class="img-fluid" style="width: 200px; height: 200px;">
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2 mb-4 text-secondary small">
                        <i class="bi bi-shield-check text-success fs-5"></i>
                        <span>Pembayaran Aman via QRIS Otomatis</span>
                    </div>

                    <form action="<?= BASEURL; ?>/langganan/prosesPerpanjang" method="post">
                        <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow">
                            <i class="bi bi-check2-circle me-2"></i>Konfirmasi & Saya Sudah Bayar
                        </button>
                    </form>

                    <a href="<?= BASEURL; ?>/langganan"
                        class="btn btn-link text-secondary mt-3 text-decoration-none small">Batal / Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>