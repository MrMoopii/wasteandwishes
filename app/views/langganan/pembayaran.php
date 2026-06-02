<?php
if (!session_id()) {
    session_start();
}

require_once __DIR__ . '/../../app/init.php';

$paymentDone = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethod = $_POST['payment_method'] ?? 'qris';
    $paymentDone = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Waste & Wishes</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .payment-card {
            width: 100%;
            max-width: 540px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .payment-header {
            background: #0d6efd;
            color: white;
            padding: 24px 30px;
        }
        .payment-header h1 {
            margin: 0;
            font-size: 22px;
        }
        .payment-body {
            padding: 28px 30px;
        }
        .total-box {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            padding: 18px 20px;
            background: #e9f2ff;
            border-radius: 12px;
            margin-bottom: 24px;
        }
        .total-box strong {
            font-size: 1rem;
            color: #495057;
        }
        .total-price {
            font-size: 28px;
            font-weight: 700;
            color: #0d6efd;
        }
        .qris-card {
            border: 1px solid #dee2e6;
            border-radius: 14px;
            padding: 18px;
            display: grid;
            width: 100%;
            place-items: center;
            margin-bottom: 18px;
            background: #f8f9fa;
        }
        .qris-card img {
            max-width: 200px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            font-weight: 600;
        }
        .form-group .form-control[disabled] {
            background: #e9ecef;
        }
        .btn-submit {
            width: 100%;
        }
        .success-message {
            text-align: center;
            padding: 32px 20px;
        }
        .success-message h2 {
            color: #198754;
        }
    </style>
</head>
<body>
    <div class="payment-card">
        <div class="payment-header">
            <h1>Pembayaran Langganan</h1>
        </div>
        <div class="payment-body">
            <?php if ($paymentDone): ?>
                <div class="success-message">
                    <h2>Pembayaran Berhasil</h2>
                    <p class="text-muted">Terima kasih, pembayaran Rp25.000 Anda telah diterima melalui QRIS.</p>
                    <a href="<?= BASEURL; ?>/langganan" class="btn btn-outline-primary mt-3">Kembali ke Langganan</a>
                </div>
            <?php else: ?>
                <div class="total-box">
                    <strong>Total Biaya Langganan</strong>
                    <span class="total-price">Rp25.000</span>
                </div>

                <form action="<?= BASEURL; ?>/pembayaran" method="POST">
                    <div class="form-group">
                        <label for="payment_method">Metode Pembayaran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris" checked>
                            <label class="form-check-label" for="qris">
                                QRIS
                            </label>
                        </div>
                    </div>

                    <div class="qris-card">
                        <div style="width: 240px; height: 240px; background: linear-gradient(135deg, #d7f2f7 0%, #ecf9fb 100%); border-radius: 18px; display: grid; place-items: center; color: #0d6efd; font-weight: 700; font-size: 14px; text-align: center; padding: 20px;">
                            QRIS CODE
                            <div style="font-size:12px; color:#495057; margin-top:10px;">Scan untuk bayar</div>
                        </div>
                        <small class="text-muted">Pastikan anda menyelesaikan pembayaran melalui aplikasi QRIS.</small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit">Bayar Sekarang</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
