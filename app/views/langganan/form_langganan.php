
<div class="langganan-view mt-5 pt-4">
    <div class="form-container">
        <h2 class="text-center fw-bold mb-4">LANGGANAN</h2>
        
        <form action="<?= BASEURL; ?>/langganan/prosesTambah" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>

            <div class="form-group">
                <label for="telpon">Nomer Telpon</label>
                <input type="tel" id="no_telp" name="no_telp" placeholder="Nomer Telpon" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn-submit">Konfirmasi Pendaftaran</button>
            </div>
        </form>
    </div>
</div>