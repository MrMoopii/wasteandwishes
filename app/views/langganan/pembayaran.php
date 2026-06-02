<div class="container py-5 d-flex justify-content-center" style="min-height: 80vh; align-items: center;">
    
    <div class="payment-card">
        
        <div class="payment-header">
            <h1>Pembayaran Langganan</h1>
        </div>
        
        <div class="payment-body">
            <?php if (isset($data['paymentDone']) && $data['paymentDone'] == true): ?>
                
                <div class="success-message">
                    <h2>Pembayaran Berhasil</h2>
                    <p class="text-muted">Terima kasih, pembayaran Rp25.000 Anda telah diterima melalui QRIS.</p>
                    <a href="<?= BASEURL; ?>/langganan" class="btn btn-outline-primary mt-3">Kembali ke Langganan</a>
                </div>

            <?php else: ?>
                
                <div class="total-box">
                    <strong>Total Biaya Langganan</strong>
                    <span class="total-price">Rp25.000</span>
                </div>

                <form action="<?= BASEURL; ?>/pembayaran/proses" method="POST">
                    
                    <div class="form-group">
                        <label for="payment_method">Metode Pembayaran</label>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris" checked style="cursor: pointer;">
                            <label class="form-check-label fw-bold" for="qris" style="cursor: pointer;">
                                QRIS
                            </label>
                        </div>
                    </div>

                    <div class="qris-card mt-3">
                        <div style="width: 240px; height: 240px; background: linear-gradient(135deg, #d7f2f7 0%, #ecf9fb 100%); border-radius: 18px; display: grid; place-items: center; color: #0d6efd; font-weight: 700; font-size: 14px; text-align: center; padding: 20px;">
                            QRIS CODE
                            <div style="font-size:12px; color:#495057; margin-top:10px;">Scan untuk bayar</div>
                        </div>
                        <small class="text-muted mt-3 text-center d-block">
                            Pastikan Anda menyelesaikan pembayaran melalui aplikasi QRIS.
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit fw-bold py-3 mt-4" style="border-radius: 10px;">
                        Bayar Sekarang
                    </button>
                </form>

            <?php endif; ?>
        </div>
    </div>

</div>