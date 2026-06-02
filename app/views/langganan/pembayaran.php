<div class="container my-5 pt-5 d-flex justify-content-center">
    <div class="card shadow-sm border-0" style="max-width: 540px; width: 100%; border-radius: 16px; overflow: hidden;">
        <div class="card-header bg-primary text-white text-center py-3">
            <h4 class="mb-0 fw-bold">Pembayaran Langganan</h4>
        </div>
        <div class="card-body p-4">
            <div class="alert alert-primary d-flex justify-content-between align-items-baseline mb-4">
                <strong class="text-secondary">Total Biaya Langganan</strong>
                <span class="fs-3 fw-bold text-primary">Rp25.000</span>
            </div>

            <form action="<?= BASEURL; ?>/langganan/prosesBayar" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Metode Pembayaran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris"
                            checked>
                        <label class="form-check-label fw-semibold" for="qris">QRIS</label>
                    </div>
                </div>

                <div class="text-center border rounded-3 p-3 bg-light mb-4">
                    <div class="mx-auto mb-2"
                        style="width: 200px; height: 200px; background: linear-gradient(135deg, #d7f2f7 0%, #ecf9fb 100%); border-radius: 18px; display: grid; place-items: center; color: #0d6efd; font-weight: 700; font-size: 14px;">
                        QRIS CODE
                        <div style="font-size:12px; color:#495057;">Scan untuk bayar</div>
                    </div>
                    <small class="text-muted">Pastikan Anda menyelesaikan pembayaran melalui aplikasi e-wallet /
                        m-banking Anda.</small>
                </div>

                <button type="submit" class="btn btn-success">Konfirmasi & Saya Sudah Bayar</button>
            </form>
        </div>
    </div>
</div>