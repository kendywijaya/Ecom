<?php $hp = [
    ["pic/iphone12_pro3.jpg", "Iphone 12 Pro Max", "November, 2020", "Super Retina XDR OLED, 6,7 inci", "Apple A14 Bionic", "Apple GPU (4-core graphics)", "6 GB", "128/256/512 GB", "-", "12 MP + 12 MP + 12 MP + TOF", "12 MP + SL 3D", "Non-removable Li-Ion 3687 mAh"],

    ["pic/huawei_mate40pro.jpg", "Huawei Mate 40 Pro+", "November, 2020", "OLED 6,76 inci", "Kirin 9000 5G", "Mali-G78 MP24", "12 GB", "256 GB", "Memori Nano hingga 256 GB", "50 MP + 12 MP + 8 MP + 20 MP + TOF", "13 MP + TOF 3D", "Non-removable Li-Po 4400 mAh"],

    ["pic/Samsung_Galaxy_Note20_Ultra_3.jpg", "Samsung Galaxy Note20 Ultra", "Agustus, 2020", "Dynamic AMOLED, 6.9 inch 1440 x 3088 piksel", "Exynos 990 (7 nm+)", "Mali-G77 MP11", "8 GB", "256 GB, 512 GB", "-", "108 MP + 12 MP + 12 MP", "10 MP", "Non-removable Li-Ion 4,500 mAh"],

    ["pic/asus_rog_pro3.jpg", "Asus ROG Phone 3", "Juli, 2019", "AMOLED, 6.59 inches", "Qualcomm SM8250 Snapdragon 865+ (7 nm+)", "Adreno 650", "8 GB, 12 GB, 16 GB", "128/8 GB, 128/12 GB, 256/12 GB, 512/12 GB, 512/16 GB", "-", "Triple 64 MP + 13 MP + 5 MP", "24 MP", "Non-removable Li-Po 6000 mAh"],

    ["pic/Xiaomi_Mi_10_ultra.jfif", "Xiaomi Mi 10 Ultra", "Agustus, 2020", "OLED, 6.67 inches", "Qualcomm SM8250 Snapdragon 865 (7 nm+)", "Adreno 650", "8 GB, 12 GB, 16 GB", "128 GB, 256 GB, 512 GB", "-", "Quad 48 MP + 48 MP + 12 MP + 20 MP", "20 MP", "Non-removable Li-Ion 4500 mAh"],

    ["pic/Sony_Xperia_10_II_2.jpg", "Sony Xperia 1 II 5G", "Februari, 2020", "OLED, 6,5 inci, 1644 x 3840 piksel", "Qualcomm SM8250 Snapdragon 865", "Adreno 650", "8 GB", "256 GB", "Hingga 1 TB", "12 MP + 12 MP + 12 MP + VGA", "8 MP", "Non-removable Li-Po 4000 mAh"],

    ["pic/Realme_X50_Pro_5G_3.jpg", "Realme X50 Pro", "Maret, 2020", "Super AMOLED, 6,44 inci", "Snapdragon 865", "Adreno 650", "12 GB", "256 GB", "-", "64 MP + 12 MP + 8 MP + 2 MP", "32 MP + 8 MP", "Non-removable Li-Po 4200 mAh"],

    ["pic/Oppo_Find_X2_Pro_1.jpg", "Oppo Find X2 Pro", "Maret, 2020", "MOLED, 6,7 inci, 1440 x 3168 piksel", "Qualcomm SM8250 Snapdragon 865", "Adreno 650", "12 GB", "521 GB", "-", "48 MP + Periskop 13 MP + 48 MP", "32 MP", "Non-removable Li-Po 4260 mAh"],

    ["pic/Vivo_X50_Pro_Plus.jpg", "Vivo X50 Pro+", "Juli, 2020", "AMOLED, 6,56 inci", "Qualcomm SM8250 Snapdragon 865 (7 nm+)", "Adreno 650", "8 GB, 12 GB", "128 GB, 256 GB", "-", "50 MP + 8 MP + 13 MP + 8 MP", "32 MP", "Non-removable Li-Po 4135 mAh"],

    ["pic/LG_V60_ThinQ_5G_1.jpg", "LG V60 ThinQ 5G", "Maret, 2020", "P-OLED, 6,8 inci, 1080 x 2460 pixels", "Snapdragon 865 (7 nm+)", "Adreno 650", "8 GB", "128 GB", "microSDXC", "64 MP + 13 MP + VGA", "10 MP", "Non-removable Li-Po 5000 mAh"]
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;

        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: center;
        }

        .gambar {
            width: 65%;
            height: auto;
            margin: 5px;
            display: block;
        }
    </style>
</head>


<body>
    <h1 align="center">E-Commerce</h1>
    <table style="width: 100%;">
        <tr>
            <th>SMARTPHONE</th>
            <th>SPECIFICATION</th>
        </tr>
        <?php foreach ($hp as $h) : ?>
            <tr>
                <th width="27%"><img src="<?= $h[0] ?>" alt="<?= $h[1] ?>" title="<?= $h[1] ?>" class="gambar">
                <td>
                    <ul>
                        <li>Nama : <?= $h[1] ?></li>
                        <li>Rilis : <?= $h[2]; ?></li>
                        <li>Layar : <?= $h[3]; ?></li>
                        <li>Chipset : <?= $h[4]; ?></li>
                        <li>GPU : <?= $h[5]; ?></li>
                        <li>RAM : <?= $h[6]; ?></li>
                        <li>Memori Internal : <?= $h[7]; ?></li>
                        <li>Memori Eksternal : <?= $h[8]; ?></li>
                        <li>Kamera Belakang : <?= $h[9]; ?></li>
                        <li>Kamera Depan : <?= $h[10]; ?></li>
                        <li>Baterai : <?= $h[11]; ?></li>
                    </ul>
                </td>
                </th>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2">
                <h3 align="right">
                    <marquee behavior="scroll" direction="left">author : aming and kendy</marquee>
                </h3>
            </td>
        </tr>
    </table>
</body>

</html>