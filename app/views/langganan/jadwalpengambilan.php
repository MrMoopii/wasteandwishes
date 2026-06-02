<div class="container py-5" style="min-height: 60vh;">
    <div class="card shadow-sm mx-auto" style="max-width: 760px; border-radius: 20px; border: none; overflow: hidden; border-top: 4px solid #17AFB0 !important;">
        
        <div class="p-4 p-md-5 text-center" style="background-color: rgba(23, 175, 176, 0.05);">
            <h2 class="fw-bold mb-3" style="color: #17AFB0;">Jadwal Pengambilan Rutin</h2>
            <p class="text-secondary mb-0 mx-auto" style="max-width: 500px; font-size: 15px;">
                Pilih hari pengambilan sampah yang ingin dijadwalkan secara berulang setiap minggu.
            </p>
        </div>

        <div class="p-4 p-md-5 bg-white">
            <form action="<?= BASEURL; ?>/jadwal/simpan" method="POST">
                
                <div class="row g-3 mb-5">
                    
                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Senin" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Senin</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Selasa" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Selasa</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Rabu" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Rabu</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Kamis" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Kamis</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Jumat" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Jumat</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Sabtu" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Sabtu</span>
                        </label>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <label class="d-flex align-items-center p-3 w-100 bg-light" style="border: 1px solid #e9ecef; border-radius: 12px; cursor: pointer;">
                            <input type="checkbox" name="jadwal[]" value="Minggu" class="me-3" style="width: 18px; height: 18px; cursor: pointer;">
                            <span class="text-dark fw-semibold" style="font-size: 15px;">Minggu</span>
                        </label>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit" class="btn fw-bold px-4 py-3 shadow-sm" style="background-color: #17AFB0; color: white; border-radius: 10px; font-size: 16px; min-width: 200px;">
                        Simpan Jadwal
                    </button>
                </div>

            </form>
        </div>
        
    </div>
</div>