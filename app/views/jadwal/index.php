<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-dark text-white p-3">
                    <h5 class="m-0 fw-bold"><i class="bi bi-calendar-plus me-2"></i>Atur Jadwal Rutin Pengambilan</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-4">
                        Sesuai ketentuan layanan, Anda dapat memilih **1 Hari operasional** dalam seminggu untuk
                        penjemputan sampah organik.
                        <span class="text-danger fw-semibold d-block mt-1">Jam operasional kurir: 08:00 - 20:00
                            WIB.</span>
                    </p>

                    <form action="<?= BASEURL; ?>/jadwal/simpan" method="POST">

                        <div class="mb-3">
                            <label for="hari_pengambilan" class="form-label fw-bold text-secondary">Pilih hari_pengambilan Pengambilan</label>
                            <select class="form-select" id="hari_pengambilan" name="hari_pengambilan" required>
                                <option value="" disabled <?= !isset($data['jadwal']['hari_pengambilan']) ? 'selected' : ''; ?>>--
                                    Pilih Salah Satu Hari --</option>
                                <?php
                                $hari_list = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                                foreach ($hari_list as $h):
                                    $selected = (isset($data['jadwal']['hari_pengambilan']) && $data['jadwal']['hari_pengambilan'] == $h) ? 'selected' : '';
                                    ?>
                                    <option value="<?= $h; ?>" <?= $selected; ?>><?= $h; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="jam" class="form-label fw-bold text-secondary">Jam Pengambilan</label>
                            <?php
                            // Ambil jam lama jika sudah ada, format ke H:i agar pas dengan input type="time"
                            $jam_val = isset($data['jadwal']['jam_pengambilan']) ? date('H:i', strtotime($data['jadwal']['jam_pengambilan'])) : '08:00';
                            ?>
                            <input type="time" name="jam" id="jam" class="form-control" min="08:00" max="20:00"
                                value="<?= $jam_val; ?>" required>
                            <div class="form-text text-muted">Contoh: Pukul 09:00 WIB</div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="<?= BASEURL; ?>/langganan" class="text-decoration-none text-muted"><i
                                    class="bi bi-arrow-left me-1"></i> Batal</a>
                            <button type="submit" class="btn btn-success px-4 rounded-pill fw-semibold shadow-sm">Simpan
                                Jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>