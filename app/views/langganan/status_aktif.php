<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card shadow-sm border-0 rounded-3 text-center p-4 mb-4">
                <div class="card-body">
                    <div class="text-success mb-3">
                        <i class="bi bi-check-circle-fill" style="font-size: 3rem;"></i>
                    </div>

                    <h3 class="fw-bold mb-2">Anda Sudah Berlangganan!</h3>
                    <p class="text-muted">Terima kasih telah berkontribusi menjaga kesehatan bumi bersama Waste & Wishes.</p>

                    <hr class="my-4">

                    <div class="bg-light p-3 rounded-3 text-start mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-secondary">Nama Pelanggan:</span>
                            <span class="fw-semibold">
                                <?= $data['langganan']['nama_pelanggan']; ?>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-secondary">Tanggal Mulai:</span>
                            <span class="fw-semibold text-dark">
                                <?= date('d F Y', strtotime($data['langganan']['tanggal_mulai'])); ?>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-secondary">Masa Berlaku Sampai:</span>
                            <span class="fw-bold text-success">
                                <?= date('d F Y', strtotime($data['langganan']['tanggal_berakhir'])); ?>
                            </span>
                        </div>
                    </div>

                    <p class="small text-muted mb-3 fw-bold">Ingin menambah masa berlangganan Anda selama 1 month ke depan?</p>

                    <form action="<?= BASEURL; ?>/langganan/pembayaranPerpanjang" method="post">
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm">
                            <i class="bi bi-wallet2 me-2"></i>Lanjut ke Pembayaran
                        </button>
                    </form>

                    <a href="<?= BASEURL; ?>/home" class="btn btn-link text-secondary mt-3 text-decoration-none">Kembali ke Beranda</a>
                </div>
            </div>

            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark m-0"><i class="bi bi-calendar3 text-success me-2"></i>Jadwal Pengambilan Sampah Organik</h5>
                    <p class="text-muted small mb-0">Berikut adalah timeline rute pengangkutan rutin mingguan untuk rumah Anda.</p>
                </div>
                <div class="card-body p-4 pt-2">
                    
                    <?php if (empty($data['jadwal_user'])) : ?>
                        <div class="text-center py-4 bg-light rounded-3 border border-dashed">
                            <p class="text-muted mb-3">Anda belum menetapkan hari operasional pengambilan sampah.</p>
                            <a href="<?= BASEURL; ?>/jadwal" class="btn btn-success btn-sm rounded-pill px-4">Susun Jadwal Sekarang</a>
                        </div>
                    <?php else : ?>
                        
                        <div class="row row-cols-2 row-cols-sm-4 row-cols-md-7 g-2 text-center mt-2">
                            <?php 
                            $hari_seminggu = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']; 
                            foreach ($hari_seminggu as $hari_pengambilan) : 
                                // PERBAIKAN 1: Cocokkan nama hari dengan kolom 'hari' di database row tunggal
                                $is_ambil = (!empty($data['jadwal_user']) && $data['jadwal_user']['hari_pengambilan'] == $hari_pengambilan);
                            ?>
                                <div class="col">
                                    <div class="card h-100 border-0 rounded-3 shadow-none <?= $is_ambil ? 'bg-success-subtle border border-success' : 'bg-light opacity-50'; ?>">
                                        <div class="card-body p-2 d-flex flex-column justify-content-center">
                                            <p class="fw-bold mb-1 small text-uppercase <?= $is_ambil ? 'text-success' : 'text-muted'; ?>" style="font-size: 11px;">
                                                <?= $hari_pengambilan; ?>
                                            </p>
                                            
                                            <?php if ($is_ambil) : ?>
                                                <span class="badge bg-success rounded-pill mb-1 mx-auto" style="font-size: 9px; width: fit-content;">
                                                    <i class="bi bi-truck me-1"></i> Angkut
                                                </span>
                                                <small class="fw-bold text-dark text-nowrap" style="font-size: 10px;">
                                                    Pukul <?= date('H:i', strtotime($data['jadwal_user']['jam_pengambilan'])); ?>
                                                </small>
                                            <?php else : ?>
                                                <span class="badge bg-secondary-subtle text-secondary rounded-pill mx-auto" style="font-size: 9px; width: fit-content;">
                                                    Libur
                                                </span>
                                                <small class="text-muted" style="font-size: 10px;">-</small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-4">
                            <div class="alert alert-info border-0 small mb-0 bg-info-subtle text-dark flex-grow-1 py-2" style="font-size: 12px;">
                                <i class="bi bi-info-circle-fill me-2 text-info"></i> Kurir Maggot BSF wilayah Gejayan & Wedomartani akan datang melakukan penjemputan setiap hari pengambilan <strong><?= $data['jadwal_user']['hari_pengambilan']; ?> pukul <?= date('H:i', strtotime($data['jadwal_user']['jam_pengambilan'])); ?> WIB</strong>.
                            </div>
                            <a href="<?= BASEURL; ?>/jadwal" class="btn btn-sm btn-outline-secondary rounded-pill px-3 fw-semibold text-nowrap">
                                <i class="bi bi-pencil-square me-1"></i> Ubah Jadwal
                            </a>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>