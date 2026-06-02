<div class="container mt-4 event-page-custom">
    <div class="split-layout">
        <div class="left-col">
            <!-- Menampilkan Gambar Event -->
            <!-- Pastikan gambar ada di folder public/img/event/ -->
            <img src="<?= BASEURL; ?>/img/event/<?= $data['event']['gambar']; ?>" 
                 alt="<?= $data['event']['nama']; ?>" 
                 class="shadow-sm" 
                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px;">
            
            <!-- Tombol Checkout -->
            <a href="<?= BASEURL; ?>/event/checkout/<?= $data['event']['id']; ?>" class="btn btn-waste w-100 mt-3 fs-5 fw-bold">
                Daftar Sekarang (<?= $data['event']['harga']; ?>)
            </a>
        </div>
        
        <div class="right-col">
            <h2 class="mb-4 fw-bold"><?= $data['event']['nama']; ?></h2>
            
            <div>
                <h4 class="fw-bold">Deskripsi</h4>
                <div class="info-box shadow-sm" style="font-size: 1.1rem; line-height: 1.6;">
                    <?= $data['event']['deskripsi']; ?>
                </div>
            </div>
            
            <div class="mt-4">
                <h4 class="fw-bold">Syarat dan Ketentuan</h4>
                <div class="info-box shadow-sm" style="font-size: 1.1rem; line-height: 1.6;">
                    <?= $data['event']['tanggal']; ?>
                </div>
            </div>
        </div>
    </div>

    <a href="<?= BASEURL; ?>/event" class="btn btn-outline-secondary mt-4">⬅ Kembali ke Daftar Event</a>
</div>