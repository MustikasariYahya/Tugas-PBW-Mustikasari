<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian</title>
    <style>
        .bingkai{
            border: 1px black;
            padding: 15px;
            width: 500px;
            font-family: 'Times New Roman', Times, serif;
        }

        .garis-bawah{
            border-bottom: 1px black;
            margin-bottom: 10px;
            padding-bottom: 5px;
            font-weight: bold;
            font-size: 1.5em;
        }

        table{ width: 100%; }
        td{ padding: 3px 0; }
    </style>

</head>
<body>

    <div class="bingkai">
        <div class="garis-bawah">Perhitungan Total Pembelian (Dengan Array)</div>

        <?php
        define("PAJAK", 0.1);
        $data_barang = array("Keyboard", 150000);
        $jumlah = 2;

        $total_harga = $data_barang[1] * $jumlah;
        $pajak_rp = $total_harga * PAJAK;
        $total_bayar = $total_harga + $pajak_rp;
        ?>

        <table>
            <tr>
                <td width="50%">Nama Barang</td>
                <td>: <?php echo $data_barang[0]; ?></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>: Rp <?php echo number_format($data_barang[1], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>: <?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Total Harga (Sebelum Pajak)</td>
                <td>: Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Pajak (10%)</td>
                <td>: Rp <?php echo number_format($pajak_rp, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td><strong>Total Bayar</strong></td>
                <td>: <strong>Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></strong></td>
            </tr>
        </table>
    </div>
</body>
</html>