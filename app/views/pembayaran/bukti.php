<div class="container py-5">
    <style>
        .payment-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.85rem;
            margin-bottom: 1.5rem;
        }

        .payment-actions .btn {
            min-width: 180px;
            padding: 12px 24px;
            font-weight: 700;
            border-radius: 0.85rem;
        }

        .schedule-link {
            display: inline-flex;
            justify-content: center;
            width: 100%;
            max-width: 280px;
            margin: 0.75rem auto 0;
            padding: 0.95rem 1.25rem;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-transparent text-center border-0">
                    <h1 class="display-6 fw-bold">Bukti Pembayaran</h1>
                </div>
                <div class="card-body text-center">
                    <div class="border rounded-4 p-4" style="background: #f8fdfd;">
                        <h2 class="fw-bold">PEMBAYARAN BERHASIL!</h2>
                        <p class="text-muted mb-4">Selamat datang pelanggan baru!</p>

                        <div class="text-start mx-auto" style="max-width: 360px;">
                            <p class="mb-1"><strong>Nama:</strong> Pelanggan Baru</p>
                            <p class="mb-1"><strong>Metode:</strong> QRIS</p>
                            <p class="mb-1"><strong>Total:</strong> Rp25.000</p>
                            <p class="mb-0 text-muted">Simpan halaman ini sebagai bukti pembayaran.</p>
                        </div>
                    </div>

                    <div class="payment-actions">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.print()">Catat Nota</button>
                    </div>
                    <a href="<?= BASEURL; ?>/langganan/jadwalpengambilan" class="btn btn-outline-primary schedule-link">Atur Jadwal Pengambilan</a>
                </div>
            </div>
        </div>
    </div>
</div>
