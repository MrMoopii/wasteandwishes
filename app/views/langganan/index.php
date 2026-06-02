<style>
    /* Prevent horizontal scroll */
    body {
        overflow-x: hidden;
    }

    .langganan-view {
        position: relative;
        min-height: 60vh;
        padding: 40px 20px;
        overflow: visible;
    }

    .langganan-view * {
        box-sizing: border-box;
    }

    .bg-blob {
        position: absolute;
        right: -25%;
        bottom: -20%;
        width: 600px;
        height: 600px;
        background-color: #e2f9f9;
        border-radius: 43% 57% 41% 59% / 37% 42% 58% 63%;
        z-index: -1;
        pointer-events: none;
    }

    .form-container {
        position: relative;
        z-index: 2;
        max-width: 450px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-container h2 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 40px;
        color: #000000;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #000000;
    }

    input[type="text"],
    input[type="tel"] {
        width: 100%;
        padding: 12px 15px;
        background-color: #464e4e;
        border: none;
        border-radius: 4px;
        color: #ffffff;
        font-size: 14px;
    }

    input::placeholder {
        color: #a0a5a5;
        font-size: 11px;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 25px;
        position: relative;
        z-index: 4;
    }

    .btn-container button,
    .btn {
        background-color: #0d6efd;
        color: #ffffff;
        border: none;
        padding: 10px 30px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-container button:hover,
    .btn:hover {
        background-color: #0b5ed7;
    }
</style>

<div class="langganan-view">

    <div class="bg-blob"></div>

    <div class="form-container">
        <h2>LANGGANAN</h2>
        
        <div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
            </div>

            <div class="form-group">
                <label for="telpon">Nomer Telpon</label>
                <input type="tel" id="telpon" name="telpon" placeholder="Nomer Telpon" required>
            </div>

            <div class="btn-container">
                <a href="<?= BASEURL; ?>/pembayaran" class="btn">Konfirmasi</a>
            </div>
        </div>
    </div>
</div>
