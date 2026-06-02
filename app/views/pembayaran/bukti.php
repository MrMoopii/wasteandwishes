<div class="container py-5" style="min-height: 60vh;">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            
            <div class="card shadow-sm border-0 mx-auto" style="border-radius: 15px; border-top: 4px solid #17AFB0 !important;">
                
                <div class="card-header bg-transparent text-center border-0 pt-4 pb-0">
                    <h2 class="fw-bold" style="color: #17AFB0;">Bukti Pembayaran</h2>
                </div>
                
                <div class="card-body text-center p-4 p-md-5">
                    
                    <div class="mb-3">
                        <span style="font-size: 50px; color: #17AFB0;">✅</span>
                    </div>

                    <div class="p-4 mb-4 mx-auto" style="border-radius: 15px; background-color: rgba(23, 175, 176, 0.05); border: 2px dashed rgba(23, 175, 176, 0.3) !important; max-width: 400px;">
                        <h4 class="fw-bold text-dark mb-1">PEMBAYARAN BERHASIL!</h4>
                        <p class="text-secondary small mb-4">Selamat datang pelanggan baru!</p>

                        <div class="text-start mx-auto" style="max-width: 300px;">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Nama</span>
                                <span class="fw-bold text-dark">Pelanggan Baru</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Metode</span>
                                <span class="fw-bold text-dark">QRIS</span>
                            </div>
                            
                            <hr style="border-top: 1px dashed #ccc;">
                            
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted fw-bold">Total</span>
                                <span class="fw-bold" style="color: #17AFB0; font-size: 1.1rem;">Rp25.000</span>
                            </div>
                            
                            <p class="mb-0 text-muted" style="font-size: 0.8rem; text-align: center; margin-top: 20px;">
                                Simpan halaman ini sebagai bukti pembayaran.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3 mt-4">
                        
                        <button type="button" class="btn btn-outline-secondary fw-bold px-4 py-2 w-100" style="border-radius: 10px; max-width: 250px;" onclick="window.print()">
                            Cetak Nota
                        </button>
                        
                        <a href="<?= BASEURL; ?>/langganan/jadwalpengambilan" class="btn btn-waste fw-bold px-4 py-2 w-100" style="border-radius: 10px; max-width: 250px;">
                            Atur Jadwal
                        </a>
                        
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>