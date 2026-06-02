<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }

        .brand-color {
            color: #00a896;
        }

        @media print {
            .no-print {
                display: none;
            }

            .invoice-box {
                border: none;
                box-shadow: none;
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <div class="container my-4">

        <div class="invoice-box mt-3">
            <div class="row align-items-center mb-4">
                <div class="col-sm-6">
                    <h3 class="fw-bold brand-color mb-1">Waste & Wishes</h3>
                    <p class="text-muted small mb-0">Teknologi untuk Kesehatan Bumi<br>Wilayah Gejayan & Wedomartani</p>
                </div>
                <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
                    <h4 class="text-uppercase fw-bold text-secondary">Nota Pembayaran</h4>
                    <p class="mb-0 small"><strong>No. Nota:</strong> #INV-<?= $data['langganan']['id_langganan']; ?></p>
                    <p class="small mb-0"><strong>Tanggal Mulai:</strong>
                        <?= date('d M Y', strtotime($data['langganan']['tanggal_mulai'])); ?></p>
                    <p class="small mb-0 text-danger"><strong>Tanggal Berakhir:</strong>
                        <?= date('d M Y', strtotime($data['langganan']['tanggal_berakhir'])); ?></p>
                </div>
            </div>

            <hr class="my-4">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="text-muted text-uppercase fw-bold small">Diterbitkan Kepada:</h6>
                    <p class="mb-1 fw-bold"><?= $data['langganan']['nama_pelanggan']; ?></p>
                    <p class="mb-1 text-muted small">Telp: <?= $data['langganan']['no_telp']; ?></p>
                    <p class="text-muted small">Alamat: <?= $data['langganan']['alamat']; ?></p>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <h6 class="text-muted text-uppercase fw-bold small">Metode Pembayaran:</h6>
                    <p class="mb-1 fw-bold text-success">QRIS Otomatis</p>
                    <p class="text-muted small">Status: <span class="badge bg-success">Lunas / Aktif</span></p>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Deskripsi Layanan</th>
                            <th scope="col" class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Layanan Langganan Pengelolaan Sampah Organik</strong><br>
                                <span class="text-muted small">Pengambilan rutin sampah rumah tangga oleh budidaya
                                    maggot BSF.</span><br>
                                <small class="text-muted fw-semibold d-block mt-1">
                                    Periode: <?= date('d M Y', strtotime($data['langganan']['tanggal_mulai'])); ?> s/d
                                    <?= date('d M Y', strtotime($data['langganan']['tanggal_berakhir'])); ?>
                                </small>
                            </td>
                            <td class="text-end align-middle">Rp25.000</td>
                        </tr>
                        <tr class="fw-bold fs-5">
                            <td class="text-end">Total Bayar:</td>
                            <td class="text-end brand-color">Rp25.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-5 pt-3 border-top">
                <p class="mb-1 fw-semibold">Terima kasih telah berkontribusi menjaga kesehatan bumi bersama kami!</p>
                <p class="text-muted small">Nota ini sah dikeluarkan secara digital oleh sistem Waste & Wishes.</p>
            </div>
        </div>
    </div>

</body>

</html>