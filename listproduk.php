<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>
    <link rel="stylesheet" href="styleproduk.css">
</head>
<body>
    <div class="container">
        <h2>Listing Produk</h2>
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php
            
            $produk1 = array("Nama Produk" => "Laptop", "Harga" => 10000000, "Stok" => 5);
            $produk2 = array("Nama Produk" => "Smartphone", "Harga" => 5000000, "Stok" => 10);
            $produk3 = array("Nama Produk" => "Mouse", "Harga" => 50000, "Stok" => 20);

           
            $daftar_produk = array($produk1, $produk2, $produk3);
            foreach ($daftar_produk as $produk) {
                echo "<tr>";
                echo "<td>" . $produk['Nama Produk'] . "</td>";
                echo "<td>Rp " . number_format($produk['Harga'], 0, ',', '.') . "</td>";
                echo "<td>" . $produk['Stok'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
