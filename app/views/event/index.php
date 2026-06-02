<div class="container mt-4 event-page-custom">
    
    <div class="row mb-3">
        <div class="col-12">
            <?php Flasher::flash_event(); ?>
        </div>
    </div>

    <div class="event-grid">
        
        <?php foreach( $data['events'] as $event ) : ?>
        
        <div class="card p-3 shadow-sm">
            <img src="<?= BASEURL; ?>/img/event/<?= $event['gambar']; ?>" 
                 alt="<?= $event['nama_event']; ?>" 
                 class="mb-2 shadow-sm" 
                 style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px;">
            
            <p class="mb-1 fw-bold"><?= $event['nama_event']; ?></p>
            
            <strong class="text-waste">Gratis</strong>
            
            <a href="<?= BASEURL; ?>/event/detail/<?= $event['id_event']; ?>" class="btn btn-sm btn-outline-dark mt-2">Lihat Detail</a>
        </div>
        
        <?php endforeach; ?>
        
    </div>

    <div class="card p-3 shadow-sm mt-4">
        <div class="banner-placeholder mb-2"></div>
        <p class="mb-1 fw-bold">Event Spesial Bulan Ini</p>
        <strong class="text-waste">Daftar Sekarang!</strong>
    </div>
</div>