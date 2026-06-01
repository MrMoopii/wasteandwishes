<!-- ==========================================
             5. FOOTER UTAMA WASTE & WISHES
             ========================================== -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5 border-top border-4" style="border-color: #17AFB0 !important;">
    <div class="container text-md-start text-center">
        <div class="row">

            <!-- Kolom 1: Profil Singkat -->
            <div class="col-md-4 col-lg-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-waste">Waste & Wishes</h5>
                <p class="text-white-50 fs-6 lh-base">
                    Platform pengelolaan limbah organik modern untuk mendukung budidaya maggot BSF di wilayah Gejayan.
                    Bersama Nexus, kita wujudkan masa depan bumi yang lebih sehat dan lestari.
                </p>
            </div>

            <!-- Kolom 2: Navigasi Cepat Website -->
            <div class="col-md-3 col-lg-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-waste">Navigasi</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="<?= BASEURL; ?>" class="text-white-50 text-decoration-none hover-waste fs-6">Beranda</a>
                    <a href="<?= BASEURL; ?>/about" class="text-white-50 text-decoration-none hover-waste fs-6">Tentang
                        Kami</a>
                    <a href="#layanan" class="text-white-50 text-decoration-none hover-waste fs-6">Layanan Kami</a>
                </div>
            </div>

            <!-- Kolom 3: Kontak Sosial & Operasional -->
            <div class="col-md-4 col-lg-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-waste">Hubungi Kami</h5>

                <!-- Lokasi -->
                <p class="text-white-50 fs-6 mb-2">
                    <span class="text-white fw-semibold">📍 Alamat:</span> Nglarang no 37, Malangrejo, RT 5/RW 35,
                    Wedomartani, Ngemplak, Sleman
                </p>

                <!-- WhatsApp Link Interaktif -->
                <p class="text-white-50 fs-6 mb-2">
                    <span class="text-white fw-semibold">💬 WhatsApp:</span> <br>
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="text-white-50 text-decoration-none hover-waste">
                        +62 812-3456-7890
                    </a>
                </p>

                <!-- Instagram Link Interaktif -->
                <p class="text-white-50 fs-6 mb-2">
                    <span class="text-white fw-semibold">📸 Instagram:</span> <br>
                    <a href="https://www.instagram.com/waste.and.wishes?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank" class="text-white-50 text-decoration-none hover-waste">
                        @wasteandwishes
                    </a>
                </p>
            </div>

        </div>

        <!-- Garis Pembatas Tipis -->
        <hr class="my-4" style="background-color: #ffffff; opacity: 0.15;">

        <!-- Baris Hak Cipta -->
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <p class="text-white-50 small mb-0">
                    &copy;
                    <?= date('Y'); ?> <strong class="text-waste">Waste & Wishes</strong> x Kelompok Nexus. All Rights
                    Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Memanggil JS Bootstrap Lokal (Menggunakan versi Bundle agar fitur dropdown/hamburger lancar) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
    crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
</body>

</html>