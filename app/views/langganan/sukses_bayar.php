<div class="container my-5 pt-5 text-center" style="min-height: 60vh;">
    <div class="card shadow-sm border-0 p-5 mx-auto" style="max-width: 550px; border-radius: 16px;">
        <div class="text-success mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
        </div>

        <h2 class="text-success fw-bold">Pembayaran Berhasil!</h2>
        <p class="text-muted">Terima kasih, pembayaran langganan Anda sebesar <strong>Rp25.000</strong> telah diterima
            melalui QRIS.</p>

        <hr class="my-4">

        <p class="small text-secondary mb-4">Silakan pilih tindakan selanjutnya di bawah ini:</p>

        <div class="d-grid gap-2">
            <a href="<?= BASEURL; ?>/langganan/jadwal" class="btn btn-primary py-2 fw-semibold shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar-plus me-2" viewBox="0 0 16 16">
                    <path
                        d="M8 7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5v2A.5.5 0 0 1 8 13v-2.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 8 7" />
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg>
                Buat Jadwal Pengambilan
            </a>

            <button type="button" onclick="cetakNotaSiluman()" class="btn btn-outline-danger py-2 fw-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-pdf me-2" viewBox="0 0 16 16">
                    <path
                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                    <path
                        d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.046-.113-.08-.346-.048-.737.054-.67.425-1.39.925-2.026-.209-.65-.42-1.323-.62-1.942C3.824 8.784 3.5 8.192 3.5 7.747c0-.41.11-.815.397-1.127.188-.205.474-.35.811-.35.539 0 .864.512.993 1.015.131.512-.047 1.436-.252 2.448h.004c.16.457.355.957.544 1.442.492.13.911.233 1.224.297.4.083.738.1.967.051.25-.053.477-.19.585-.449.092-.218.121-.546.077-.917a.8.8 0 0 1 .022-.347c.088-.004.143-.01.161-.01.115 0 .214.001.287.01.111.015.244.048.35.139.146.125.194.308.18.518-.027.389-.19.907-.465 1.448-.192.378-.457.728-.766 1.026-.41.395-.87.684-1.322.812-.427.122-.79.06-.976-.116-.175-.166-.217-.468-.16-.867h-.004c-.172-.486-.37-.996-.566-1.486-.66.184-1.311.415-1.85.625-.454.177-.81.319-1.033.413-.23.098-.432.193-.576.237a.8.8 0 0 1-.316.03m1.379-4.893c-.023.147-.02.349.006.57.021.18.061.377.114.59.13-.547.209-1.01.195-1.16-.015-.163-.038-.232-.063-.252a.4.4 0 0 0-.145-.043c-.07-.011-.124.144-.107.295Zm1.398 4.01c.207.51.348.9.431 1.117.015-.008.032-.017.048-.027.18-.104.375-.285.57-.543a15 15 0 0 0-.442-.214c-.217-.079-.417-.143-.607-.233Zm3.957-1.045c-.148.03-.362.032-.605.011a8.6 8.6 0 0 0 .543.695c.008 0 .013-.006.02-.014a1.3 1.3 0 0 0 .194-.27.4.4 0 0 0-.152-.422ZM5.102 11.63c-.04.288-.035.52.014.675.022.067.047.107.073.125.027.018.06.02.094 0 .086-.05.257-.257.434-.502a14 14 0 0 1-.615-.298Z" />
                </svg>
                Cetak Nota Pembayaran (PDF)
            </button>

            <iframe id="notaIframe" src="" style="display: none;"></iframe>

            <a href="<?= BASEURL; ?>" class="btn btn-light py-2 fw-semibold border text-secondary mt-2">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<script>
    function cetakNotaSiluman() {
        const iframe = document.getElementById('notaIframe');

        // Set URL tujuan ke controller cetak nota
        iframe.src = "<?= BASEURL; ?>/langganan/cetakNota";

        // Tunggu sampai iframe selesai memuat data secara background
        iframe.onload = function () {
            // Fokuskan ke iframe lalu panggil dialog printer bawaan
            iframe.contentWindow.focus();
            iframe.contentWindow.print();
        };
    }
</script>