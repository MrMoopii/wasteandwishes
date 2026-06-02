<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-waste text-dark">
                    <h1 class="h4 mb-0">Pembayaran Langganan</h1>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="h5">Total Biaya</h2>
                        <div class="p-3 bg-light rounded">
                            <strong class="fs-3">Rp25.000</strong>
                        </div>
                    </div>

                    <p>Pilih metode pembayaran dan lanjutkan ke proses pembayaran.</p>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="qris" checked>
                            <label class="form-check-label" for="qris">QRIS</label>
                        </div>
                    </div>

                    <div class="mb-4 p-4 bg-light rounded text-center">
                        <div style="width: 200px; height: 200px; margin: 0 auto; background: linear-gradient(135deg, #d7f2f7 0%, #ecf9fb 100%); border-radius: 20px; display: grid; place-items: center; color: #0d6efd; font-weight: 700;">
                            QRIS CODE
                        </div>
                        <small class="text-muted d-block mt-3">Scan QRIS untuk menyelesaikan pembayaran.</small>
                    </div>

                    <a href="<?= BASEURL; ?>/langganan" class="btn btn-outline-secondary me-2">Kembali</a>
                    <a href="<?= BASEURL; ?>/pembayaran/bukti" class="btn btn-primary">Bayar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
