<style>
    .jadwal-view {
        padding: 40px 20px;
        min-height: 60vh;
        background: #f5fbff;
    }

    .jadwal-card {
        max-width: 760px;
        margin: 0 auto;
        border-radius: 28px;
        border: 1px solid rgba(13, 110, 253, 0.12);
        background: #ffffff;
        box-shadow: 0 26px 70px rgba(13, 110, 253, 0.08);
        overflow: hidden;
    }

    .jadwal-header {
        background: #f0f8ff;
        padding: 28px 32px;
        text-align: center;
    }

    .jadwal-header h2 {
        margin: 0;
        font-size: 2rem;
        font-weight: 800;
        color: #0d6efd;
    }

    .jadwal-header p {
        margin: 10px auto 0;
        max-width: 520px;
        color: #556174;
        font-size: 1rem;
    }

    .jadwal-body {
        padding: 28px 32px 32px;
    }

    .jadwal-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
    }

    .jadwal-option {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        padding: 16px 18px;
        border-radius: 18px;
        background: #f8fbff;
        border: 1px solid #dbe9f7;
        transition: transform 0.18s ease, background-color 0.18s ease;
        cursor: pointer;
    }

    .jadwal-option:hover {
        transform: translateY(-2px);
        background: #ecf4ff;
    }

    .jadwal-option input {
        width: 1.2rem;
        height: 1.2rem;
    }

    .jadwal-option label {
        margin: 0;
        font-size: 1rem;
        font-weight: 600;
        color: #1f2937;
    }

    .jadwal-actions {
        margin-top: 28px;
        text-align: center;
    }

    .jadwal-actions .btn {
        min-width: 180px;
        padding: 12px 24px;
        font-weight: 600;
        border-radius: 12px;
    }

    @media (max-width: 768px) {
        .jadwal-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 520px) {
        .jadwal-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="jadwal-view">
    <div class="jadwal-card">
        <div class="jadwal-header">
            <h2>Jadwal Pengambilan Rutin</h2>
            <p>Pilih hari pengambilan sampah yang ingin dijadwalkan secara berulang setiap minggu.</p>
        </div>
        <div class="jadwal-body">
            <div class="jadwal-grid">
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-senin" name="jadwal[]" value="Senin">
                    <label for="jadwal-senin">Senin</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-selasa" name="jadwal[]" value="Selasa">
                    <label for="jadwal-selasa">Selasa</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-rabu" name="jadwal[]" value="Rabu">
                    <label for="jadwal-rabu">Rabu</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-kamis" name="jadwal[]" value="Kamis">
                    <label for="jadwal-kamis">Kamis</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-jumat" name="jadwal[]" value="Jumat">
                    <label for="jadwal-jumat">Jumat</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-sabtu" name="jadwal[]" value="Sabtu">
                    <label for="jadwal-sabtu">Sabtu</label>
                </div>
                <div class="jadwal-option">
                    <input type="checkbox" id="jadwal-minggu" name="jadwal[]" value="Minggu">
                    <label for="jadwal-minggu">Minggu</label>
                </div>
            </div>

            <div class="jadwal-actions">
                <button type="button" class="btn btn-primary">Simpan Jadwal</button>
            </div>
        </div>
    </div>
</div>
