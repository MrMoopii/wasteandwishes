<div class="position-relative" style="min-height: 75vh; overflow: hidden; background-color: #f8f9fa;">
    
    <div class="position-absolute" 
         style="right: -5%; bottom: -15%; width: 500px; height: 500px; background-color: rgba(23, 175, 176, 0.1); border-radius: 43% 57% 41% 59% / 37% 42% 58% 63%; z-index: 0; pointer-events: none;">
    </div>

    <div class="container py-5 position-relative" style="z-index: 2;">
        
        <div class="card shadow-sm mx-auto border-0" style="max-width: 450px; border-radius: 15px; border-top: 4px solid #17AFB0 !important;">
            <div class="card-body p-4 p-md-5">
                
                <h2 class="text-center fw-bold text-dark mb-4" style="letter-spacing: 1px;">LANGGANAN</h2>
                
                <form action="<?= BASEURL; ?>/pembayaran" method="POST">
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold text-dark">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control bg-light py-2" placeholder="Masukkan Nama Lengkap" >
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold text-dark">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control bg-light py-2" placeholder="Masukkan Alamat" >
                    </div>

                    <div class="mb-4">
                        <label for="telpon" class="form-label fw-bold text-dark">Nomor Telepon</label>
                        <input type="tel" id="telpon" name="telpon" class="form-control bg-light py-2" placeholder="Masukkan Nomor Telepon">
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-waste fw-bold py-2 shadow-sm" style="border-radius: 8px; font-size: 16px;">
                            Konfirmasi
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
    </div>
</div>