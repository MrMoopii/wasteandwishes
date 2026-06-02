<div class="container mt-4 event-page-custom">
    <div class="split-layout">
        <div class="left-col">
            <img src="<?= BASEURL; ?>/img/event/<?= $data['event']['gambar']; ?>" 
                 alt="<?= $data['event']['nama']; ?>" 
                 class="shadow-sm" 
                 style="width: 100%; height: 500px; object-fit: cover; border-radius: 8px;">
            
            </div>
        
        <div class="right-col">
            <div class="form-card shadow-sm p-4 bg-white rounded">
                <h3 class="text-center mb-4">Data Diri</h3>
                
                <form action="<?= BASEURL; ?>/event/proses_checkout" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">No. Handphone</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor HP" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required>
                    </div>

                    <div class="text-center text-waste fs-1 my-4">
                        🌿
                    </div>
                    
                    <button type="submit" class="btn btn-dark w-100">Kirim Pesanan</button>
                </form>
            </div>
        </div>
    </div>

    <a href="<?= BASEURL; ?>/event/detail/<?= $data['event']['id']; ?>" class="btn btn-outline-secondary mt-4">⬅ Kembali</a>
</div>